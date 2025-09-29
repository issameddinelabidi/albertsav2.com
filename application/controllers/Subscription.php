<?php
// Specify domains from which requests are allowed
header('Access-Control-Allow-Origin: *');

// Specify which request methods are allowed
header('Access-Control-Allow-Methods: PUT, GET, POST, DELETE, OPTIONS');

// Additional headers which may be sent along with the CORS request
header('Access-Control-Allow-Headers: X-Requested-With,Authorization,Content-Type');

// Set the age to 1 day to improve speed/caching.
header('Access-Control-Max-Age: 86400');

// header('Access-Control-Allow-Origin: *');
// header('Content-Type: application/json');

defined('BASEPATH') or exit('No direct script access allowed');

class Subscription extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();

		//Check active user state
		if (!empty($_SESSION['basic'])) {
			$this->basic = $_SESSION['basic'];

			$this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic ' . $this->basic, 'Accept-Language: ' . LANG]]);

			try {
				$this->data['user'] = $this->nx_client->getOne('me', '', []);

				$this->nx_client = new NxClient([WS_URL, null, null, ["Authorization: Basic " . $this->basic, 'Accept-Language: ' . LANG, "Send-All: 1"]]);
			} catch (Exception $e) {
				switch ($e->getCode()) {
					case 1024:
						$notif = [
							'text' => $e->getMessage(),
							'type' => 'error'
						];

						$this->session->set_flashdata('notif', $notif);
						break;
				}
				session_destroy();

				redirect(site_url('connexion'));
			}
		} else {
			redirect(site_url('connexion'));
		}

		$this->data['config'] = $this->nx_client->getOne('Configuration', 1, []);

		if (!empty($this->data['user'])) {
			$this->data['home_link'] = site_url('dashboard');
		} else {
			$this->data['home_link'] = site_url();
		}
	}

	public function index()
	{

		APPUP::checkIfProfilComplete($this->data['user']);

		$user_filter = ['user_unique_id,eq,' . $this->data['user']['unique_id']];

		$get_annonces = $this->nx_client->getList('AnnonceList', ['fields' => 'id,unique_id,user_unique_id,title,to_review,annonces_to_review,username,address,zipcode,city,country,type,deleted,channel_item_id,member_until,active_plan,platform_reference,platform_lang', 'filter' => $user_filter, 'order' => 'id desc', 'limit' => 200]);

		$active_annonces = count(array_filter($get_annonces, fn($annonce) => empty($annonce['deleted'])));

		if (!empty($active_annonces)) {
			$billing_infos = APPUP::getNextBillingAmount($active_annonces);
		}


		$amount_to_pay = $billing_infos['amount_to_pay'] ?? 0;
		$amount_per_annonce = $billing_infos['amount_per_annonce'] ?? 0;


		$this->data['annonces_list'] = $get_annonces;
		$this->data['active_annonces'] = $active_annonces;
		$this->data['amount_per_annonce'] = $amount_per_annonce;


		$this->data['next_billing'] = $amount_to_pay;

		//Get last orders
		// if (!empty($this->data['user']['revolut_customer_id']) && !empty($this->data['user']['revolut_payment_method_id'])) {
		// 	$customer_id = $this->data['user']['revolut_customer_id'];

		// 	$orders = APPUP::rev_call('GET', '/api/orders?customer_id=' . $customer_id . '&state=completed');


		// 	if (!empty($orders)) {
		// 		$latestOrderId = $orders['orders'][0]['id'];

		// 		$payments = APPUP::rev_call('GET', "/api/orders/{$latestOrderId}/payments");

		// 		foreach ($payments as $p) {
		// 			if (!empty($p['payment_method']['id'])) {
		// 				$payment_method = $p['payment_method']['id'];
		// 				break;
		// 			}
		// 		}
		// 	}
		// }




		$this->data['page_type'] = 'subscriptions';
		$this->data['page_title'] = 'Mon abonnement Albert';

		$this->load->view('head', $this->data);
		$this->load->view('subscriptions/main');
		$this->load->view('foot');
	}

	public function getRevolutOrderToken()
	{

		header('Content-Type: application/json');

		function rev_call($method, $path, $body = null)
		{
			$url = rtrim(REVOLUT_BASE_URL, '/') . $path;
			$headers = [
				'Authorization: Bearer ' . REVOLUT_SK,
				'Content-Type: application/json',
				// requis pour /api/orders
				'Revolut-Api-Version: ' . REVOLUT_API_VERSION,
			];
			$ch = curl_init($url);
			$opts = [
				CURLOPT_RETURNTRANSFER => true,
				CURLOPT_CUSTOMREQUEST  => strtoupper($method),
				CURLOPT_HTTPHEADER     => $headers,
				CURLOPT_TIMEOUT        => 20,
			];
			if ($body !== null && strtoupper($method) !== 'GET') {
				$opts[CURLOPT_POSTFIELDS] = json_encode($body);
			}
			curl_setopt_array($ch, $opts);
			$res  = curl_exec($ch);
			if ($res === false) {
				http_response_code(500);
				echo json_encode(['error' => curl_error($ch)]);
				exit;
			}
			$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			curl_close($ch);
			if ($code >= 300) {
				http_response_code($code);
				echo $res;
				exit;
			}
			return json_decode($res, true) ?: [];
		}

		if (empty($this->data['user']['revolut_customer_id'])) {
			$customer = APPUP::rev_call('POST', '/api/1.0/customers', [
				'email' => $this->data['user']['email'],
				// 'full_name' => 'Nom Prénom',
			]);

			if (!empty($customer['id']) && empty($this->data['user']['revolut_customer_id'])) {
				$this->nx_client->update('User', $this->data['user']['id'], ['revolut_customer_id' => $customer['id']]);
			}


			$customer_id = $customer['id'];
		} else {
			$customer_id = $this->data['user']['revolut_customer_id'];
		}

		$returnUrl = site_url('Actions/handleRevolutCard');

		// Crée un order 0€ lié au customer
		$order = rev_call('POST', '/api/orders', [
			'amount'       => 0,
			'currency'     => 'EUR',
			'customer'     => ['id' => $customer_id],
			'description'  => 'Autorisation carte (0€) pour paiements futurs',
			'redirect_url' => $returnUrl,
			'metadata'     => ['purpose' => 'save_pm_only']
		]);

		// Renvoie le token public pour le widget + l'id API si besoin côté serveur
		echo json_encode([
			'token' => $order['token'] ?? null,  // à passer en publicId côté front
			'id'    => $order['id']    ?? null   // utile pour appels serveur (payments, etc.)
		], JSON_PRETTY_PRINT);
	}

	/*
	public function testChargeRevolut()
	{
		$customer_id       = $this->data['user']['revolut_customer_id'];
		$payment_method_id = $this->data['user']['revolut_payment_method_id'];
		$amount_to_debit      = 1999;

		if (!$customer_id || !$payment_method_id || $amount_to_debit <= 0) {
			show_error('Paramètres manquants', 400);
		}

		// 1) créer un order
		$order = APPUP::rev_call('POST', '/api/orders', [
			'amount'      => $amount_to_debit,
			'currency'    => 'EUR',
			'customer'    => ['id' => $customer_id],
			'description' => 'Abonnement mensuel'
		]);

		// 2) payer avec la méthode sauvegardée (initiator=merchant)
		$pay = APPUP::rev_call('POST', "/api/orders/{$order['id']}/payments", [
			'saved_payment_method' => [
				'type'      => 'card',  // ou 'revolut_pay'
				'id'        => $payment_method_id,
				'initiator' => 'merchant'
			]
		]);

		$result = [
			'order' => $order,
			'payment' => $pay
		];
		var_dump($result);
		die();

		// $this->output
		// 	->set_content_type('application/json')
		// 	->set_output(json_encode(['order' => $order, 'payment' => $pay]));
	}
*/

	public function removeProperties()
	{
		if (empty($_POST['to_remove'])) {
			$notif = [
				'text' => 'Merci de sélectionner au moins une annonce',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('abonnement'));
		}

		$user_filter = ['user_unique_id,eq,' . $this->data['user']['unique_id']];

		$get_annonces = $this->nx_client->getList('AnnonceList', ['fields' => 'id,unique_id,user_unique_id,title,to_review,annonces_to_review,username,address,zipcode,city,country,type,deleted,channel_item_id,member_until,active_plan,platform_reference,platform_lang', 'filter' => $user_filter, 'order' => 'id desc', 'limit' => 200]);

		$active_annonces = count(array_filter($get_annonces, fn($annonce) => empty($annonce['deleted'])));

		if (($active_annonces - count($_POST['to_remove'])) < 3) {
			$notif = [
				'text' => 'Vous devez conserver un minimum de 3 annonces actives sur notre plateforme.',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('abonnement'));
		}

		$unique_ids_list = implode(',', $_POST['to_remove']);
		$get_properties = $this->nx_client->getList('Annonce', ['filter' => ['user_unique_id,eq,' . $this->data['user']['unique_id'], 'unique_id,in,' . $unique_ids_list], 'fields' => 'id,title,user_unique_id,unique_id,deleted']);

		try {
			if (!empty($get_properties)) {
				foreach ($get_properties as $prop) {
					$this->nx_client->delete('Annonce', $prop['id']);
				}
			}

			$notif = [
				'text' => 'Mise à jour effectuée',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('abonnement'));
		} catch (Exception $e) {
			$notif = [
				'text' => 'Erreur survenue N° 3829',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('abonnement'));
		}
	}

	public function restoreProperties()
	{

		if ($_POST['restore_word'] != 'restaurer') {
			$notif = [
				'text' => 'Le mot de confirmation est incorrect.',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('abonnement'));
		}

		//Get total déjà actives
		$user_filter = ['user_unique_id,eq,' . $this->data['user']['unique_id']];

		$get_annonces = $this->nx_client->getList('AnnonceList', ['fields' => 'id,unique_id,user_unique_id,title,to_review,annonces_to_review,username,address,zipcode,city,country,type,deleted,channel_item_id,member_until,active_plan,platform_reference,platform_lang', 'filter' => $user_filter, 'order' => 'id desc', 'limit' => 200]);

		$active_annonces = count(array_filter($get_annonces, fn($annonce) => empty($annonce['deleted'])));

		$quantity_to_restore = count($_POST['to_restore'] ?? []);

		$final_quantity_of_properties = $active_annonces + $quantity_to_restore;

		$billing_infos = APPUP::getNextBillingAmount($final_quantity_of_properties);


		$amount_per_annonce = $billing_infos['amount_per_annonce'];                // prix plein en centimes (19,99 €)
		$member_until = $this->data['user']['member_until'];

		$today = new DateTimeImmutable('today');
		$until = new DateTimeImmutable($member_until);

		// Nombre de jours restants (>=0)
		$days_left = max(0, $today->diff($until)->days);

		// Coût journalier en centimes (base 30 jours)
		$daily = $amount_per_annonce / 30;

		// Montant proratisé en centimes
		$prorata = (int) round($daily * $days_left);

		echo "Jours restants : $days_left\n";
		echo "Coût journalier : " . number_format($daily / 100, 2, ',', ' ') . " €\n";
		echo "Montant à payer par annonce : " . number_format($prorata / 100, 2, ',', ' ') . " €\n";

		$amount_to_debit = $prorata * $quantity_to_restore;

		$customer_id       = $this->data['user']['revolut_customer_id'];
		$payment_method_id = $this->data['user']['revolut_payment_method_id'];
		$amount_to_debit      = $amount_to_debit;

		try {

			if (!$customer_id || !$payment_method_id || $amount_to_debit <= 0) {
				show_error('Moyen de paiement non trouvé, merci de contacter votre support.', 400);
			}

			$uuid_list = implode(',', $_POST['to_restore']);

			$wanted_properties = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,in,' . $uuid_list], 'fields' => 'id,unique_id,deleted']);

			if (empty($wanted_properties)) {
				die('Erreur survenue, merci de contacter le support : N° 49388');
			}

			if (!empty($payment_method_id) && $payment_method_id != 'no_renew' && $this->data['user']['id']!=4) {

				// 1) créer un order
				$order = APPUP::rev_call('POST', '/api/orders', [
					'amount'      => $amount_to_debit,
					'currency'    => 'EUR',
					'customer'    => ['id' => $customer_id],
					'description' => 'Annonces restaurées'
				]);

				// 2) payer avec la méthode sauvegardée (initiator=merchant)
				$pay = APPUP::rev_call('POST', "/api/orders/{$order['id']}/payments", [
					'saved_payment_method' => [
						'type'      => 'card',  // ou 'revolut_pay'
						'id'        => $payment_method_id,
						'initiator' => 'merchant'
					]
				]);
			}

			$result = [
				'payment' => $pay ?? []
			];

			$transac = [
				'user_unique_id' => $this->data['user']['unique_id'],
				'quantity_wanted' => $quantity_to_restore,
				'properties_wanted' => json_encode($_POST['to_restore']),
				'quantity_final' => $final_quantity_of_properties,
				'price_per_annonce' => $prorata,
				'price_paid' => $amount_to_debit,
				'result' => json_encode($result),
			];

			$this->nx_client->create('Transac', $transac);

			if (!empty($wanted_properties)) {
				foreach ($wanted_properties as $wp) {
					$this->nx_client->update('Annonce', $wp['id'], ['deleted' => 0]);
				}
			}

			$notif = [
				'text' => 'Vos ' . count($wanted_properties) . ' annonces ont bien été restaurées',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('abonnement'));
		} catch (Exception $e) {
			var_dump($e);
			die();
		}
	}


	public function askForPM()
	{
		// if (!empty($this->data['user']['revolut_payment_method_id'])) {
		// 	redirect(site_url('dashboard'));
		// }

		$this->data['page_type'] = 'ask_for_pm';
		$this->data['page_title'] = 'Renseignez vos paramètres de facturation';

		$user_filter = ['user_unique_id,eq,' . $this->data['user']['unique_id']];

		$get_annonces = $this->nx_client->getList('AnnonceList', ['fields' => 'id,unique_id,user_unique_id,title,to_review,annonces_to_review,username,address,zipcode,city,country,type,deleted,channel_item_id,member_until,active_plan,platform_reference,platform_lang', 'filter' => $user_filter, 'order' => 'id desc', 'limit' => 200]);

		$this->data['annonces_list'] = $get_annonces;

		$this->load->view('head', $this->data);
		$this->load->view('subscriptions/ask_for_pm');
		$this->load->view('foot');
	}
}
