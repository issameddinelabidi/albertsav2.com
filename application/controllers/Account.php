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

class Account extends CI_Controller
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
				if ($this->data['user']['access_level'] == 100) {
					$this->nx_client = new NxClient([WS_URL, null, null, ["Authorization: Basic " . $this->basic, 'Accept-Language: ' . LANG, "Send-All: 1"]]);
				}
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

		// if (!empty($this->data['user']['promo_code'])) {

		// 	if (!empty($this->data['user']['is_from_first_stripe_account'])) {
		// 		$stripe = new \Stripe\StripeClient(getenv('STRIPE_SK'));
		// 	} else {
		// 		$stripe = new \Stripe\StripeClient(STRIPE_SK);
		// 	}

		// 	try {
		// 		$this->data['coupon'] = $stripe->coupons->retrieve($this->data['user']['promo_code'], []);

		// 		$to_pay = $this->data['user']['subscription_price'] - round($this->data['user']['subscription_price'] * $this->data['coupon']->percent_off / 100);

		// 		$this->data['amount_to_send'] = round($to_pay * $this->data['coupon']->times_redeemed * 10 / 100);
		// 	} catch (Exception $e) {
		// 	}
		// }

		// if (!empty($this->data['user']['second_promo_code'])) {
		// 	if (!empty($this->data['user']['is_from_first_stripe_account'])) {
		// 		$stripe = new \Stripe\StripeClient(getenv('STRIPE_SK'));
		// 	} else {
		// 		$stripe = new \Stripe\StripeClient(getenv('STRIPE_SK'));
		// 	}

		// 	try {
		// 		$this->data['second_coupon'] = $stripe->coupons->retrieve($this->data['user']['second_promo_code'], []);

		// 		$to_pay = $this->data['user']['second_subscription_price'] - round($this->data['user']['second_subscription_price'] * $this->data['second_coupon']->percent_off / 100);

		// 		$this->data['second_amount_to_send'] = round($to_pay * $this->data['second_coupon']->times_redeemed * 10 / 100);
		// 	} catch (Exception $e) {
		// 	}
		// }

		$this->data['channel_managers'] = $this->nx_client->getList('ChannelManager', ['order' => 'name asc']);


		$this->data['page_type'] = 'profile';
		$this->data['page_title'] = 'Mon profil';

		$this->load->view('head', $this->data);
		$this->load->view('profile/settings');
		$this->load->view('foot');
	}

	public function updateParams()
	{

		if (!empty($_POST['beds24_invite_code']) && $_POST['beds24_invite_code'] != $this->data['user']['beds24_invite_code']) {
			$_POST['beds24_invite_code'] = trim($_POST['beds24_invite_code']);

			try {
				$_POST['beds24_refresh_token'] = APPUP::getAuthToken($_POST['beds24_invite_code']);
			} catch (Exception $e) {
				$notif = [
					'text' => $e->getMessage(),
					'type' => 'error'
				];

				$this->session->set_flashdata('notif', $notif);
				redirect(site_url('account'));
			}

			try {
				$_POST['beds24_auth_token'] = APPUP::getAuthToken($_POST['beds24_refresh_token'], 'classic');
				$_POST['beds24_auth_token_last_refresh'] = date('Y-m-d H:i:s');
			} catch (Exception $e) {
				$notif = [
					'text' => $e->getMessage(),
					'type' => 'error'
				];

				$this->session->set_flashdata('notif', $notif);
				redirect(site_url('account'));
			}
		}

		if (empty($this->data['user']['personal_token'])) {
			$_POST['personal_token'] = $this->data['user']['id'] . '-' . APPUP::generateSmallPersonalToken($this->data['user']['id']);
			$_POST['personal_header'] = APPUP::generateSmallPersonalHeader();
		}

		try {
			$this->nx_client->update('User', $this->data['user']['id'], $_POST);

			$notif = [
				'text' => 'Vos modifications ont bien été prises en compte.',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);

			if (!empty($_GET['is_first_completion'])) {
				redirect(site_url('subscription/askForPm'));
			} else {
				redirect(site_url('account'));
			}
		} catch (Exception $e) {
			$notif = [
				'text' => 'Erreur lors de la modification de votre profil. Veuillez nous contacter',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);

			redirect(site_url('account'));
		}
	}

	public function updateRenew()
	{
		try {
			$this->nx_client->update('User', $this->data['user']['id'], ['autorenew' => $_POST['autorenew']]);

			$notif = [
				'text' => 'Vos modifications ont bien été prises en compte.',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);

			redirect(site_url('abonnement'));
		} catch (Exception $e) {
			$notif = [
				'text' => 'Erreur lors de la modification de votre profil. Veuillez nous contacter',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);

			redirect(site_url('abonnement'));
		}
	}

	public function updatePicture()
	{

		if ($_FILES['file']['size'] > 8000000) {
			$notif = [
				'text' => 'Merci d\'envoyer un fichier inférieur à 8Mo.',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('parametres'));
		}


		// if ($_FILES['file']['type'] != 'image/jpg' && $_FILES['file']['type'] != 'image/jpeg' && $_FILES['file']['type'] != 'image/png') {
		// 	$notif = [
		// 		'text' => 'Merci d\'envoyer un fichier au format JPG, JPEG ou PNG.',
		// 		'type' => 'error'
		// 	];

		// 	$this->session->set_flashdata('notif', $notif);
		// 	redirect(site_url('parametres'));
		// }


		try {
			$user_infos = $_POST;

			// var_dump($_FILES);
			// die();

			if (!empty($_FILES['file']['tmp_name'])) {

				$filePath = $_FILES['file']['tmp_name'];
				$exif = exif_read_data($_FILES['file']['tmp_name']);

				$ext = explode('/', $exif['MimeType']);


				if ($ext[1] == 'jpeg') {
					if (!empty($exif['Orientation'])) {
						$imageResource = imagecreatefromjpeg($filePath);

						switch ($exif['Orientation']) {
							case 3:
								$image = imagerotate($imageResource, 180, 0);
								break;
							case 6:
								$image = imagerotate($imageResource, -90, 0);
								break;
							case 8:
								$image = imagerotate($imageResource, 90, 0);
								break;
							default:
								$image = $imageResource;
						}


						imagejpeg($image, $_FILES['file']['tmp_name'], 92);
					}
				}

				$input_name = 'file';
				$img_data = [
					'file' => new CurlFile($_FILES[$input_name]['tmp_name'], $_FILES[$input_name]['type'], $_FILES[$input_name]['name']),
					'type' => 'avatar'
				];

				// var_dump($img_data);
				// die();

				$upload = $this->nx_client->create('File', $img_data);
				// var_dump($upload);
				// die();
				$user_infos = [
					'avatar' => $upload['id'],
					'avatar_file_name' => $upload['file_name'],
					'avatar_url' => $upload['url']
				];
			}

			$this->nx_client->update('User', $this->data['user']['id'], $user_infos);


			$notif = [
				'text' => 'Vos paramètres ont bien été mis à jours',
				'type' => 'success'
			];
		} catch (Exception $e) {
			var_dump($e);
			die();
			$notif = [
				'text' => 'Erreur lors de la modification de vos paramètres.',
				'type' => 'error'
			];
		}

		$this->session->set_flashdata('notif', $notif);

		redirect(site_url('parametres'));
	}

	public function updatePassword()
	{
		$me = APPUP::getUserFromBasic($_SESSION['basic']);

		$this->nx_client = new NxClient([WS_URL, null, null, ["Authorization: Basic " . $_SESSION['basic']]]);

		$post = $this->input->post();

		$username = $me['email'];
		$current_password = $post['current_password'];
		$new_password = $post['new_password'];

		//Check if current password is good
		try {
			$this->nx_client = new NxClient([WS_URL, null, null, ["Authorization: Basic " . base64_encode($username . ':' . $current_password)]]);

			$me = $this->nx_client->getList('me', [], []);
		} catch (Exception $e) {

			$notif = [
				'text' => 'Mot de passe actuel erroné.',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('account'));
		}


		if ($post['new_password'] != $post['new_password_conf']) {
			$notif = [
				'text' => 'Le nouveau mot de passe ne correspond pas à sa confirmation.',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('account'));
		}


		$datas = [
			'password' => $post['new_password'],
			'key' => 'XMN(g~jcH56q>em'
		];

		try {
			$this->nx_client->patch('User', $me['id'], 'changePassword', $datas);

			$message = 'Votre mot de passe a bien été mis à jour.';
			$type = 'success';

			$this->session->set_tempdata('basic', base64_encode($me['email'] . ':' . $new_password), (60 * 60 * 24 * 365));
		} catch (Exception $e) {

			switch ($e->getCode()) {
				case 3007:
					$message = 'Utilisateur non trouvé.';
					$type = 'error';
					break;
				default:
					$message = 'Une erreur est survenue lors de la modification du mot de passe.';
					$type = 'error';
					break;
			}
		}

		$notif = [
			'text' => $message,
			'type' => $type
		];

		$this->session->set_flashdata('notif', $notif);

		redirect(site_url('account'));
	}


	public function updateLogo()
	{

		if (!empty($_FILES['file']['name'])) {
			if ($_FILES['file']['size'] > 3000000) {
				$notif = [
					'text' => 'Merci d\'envoyer un fichier inférieur à 3Mo.',
					'type' => 'error'
				];

				$this->session->set_flashdata('notif', $notif);
				redirect(site_url('account'));
			}


			if ($_FILES['file']['type'] != 'image/jpg' && $_FILES['file']['type'] != 'image/jpeg' && $_FILES['file']['type'] != 'image/png') {
				$notif = [
					'text' => 'Merci d\'envoyer un fichier au format JPG, JPEG ou PNG.',
					'type' => 'error'
				];

				$this->session->set_flashdata('notif', $notif);
				redirect(site_url('account'));
			}
		}

		try {
			$user_infos = $_POST;

			// var_dump($_FILES);
			// die();

			if (!empty($_FILES['file']['tmp_name'])) {
				$input_name = 'file';
				$img_data = [
					'file' => new CurlFile($_FILES[$input_name]['tmp_name'], $_FILES[$input_name]['type'], $_FILES[$input_name]['name']),
					'type' => 'avatar',
					'user_id' => $this->data['user']['id']
				];


				$upload = $this->nx_client->create('File', $img_data);

				$user_infos['avatar'] = $upload['id'];
				$user_infos['avatar_file_name'] = $upload['file_name'];
				$user_infos['avatar_url'] = $upload['url'];
			}

			$this->nx_client->update('User', $this->data['user']['id'], $user_infos);


			$notif = [
				'text' => 'Vos paramètres ont bien été mis à jour',
				'type' => 'success'
			];
		} catch (Exception $e) {
			$notif = [
				'text' => 'Erreur lors de la modification de votre logo.',
				'type' => 'error'
			];
		}

		$this->session->set_flashdata('notif', $notif);

		redirect(site_url('account'));
	}

	public function addPostIt()
	{
		$_POST['creator_id'] = $this->data['user']['id'];
		$nx_action = $this->nx_client->create('PostIt', $_POST);

		$notif = [
			'text' => 'Post-it ajouté avec success',
			'type' => 'success'
		];

		$this->session->set_flashdata('notif', $notif);
		redirect(site_url('dashboard'));
	}

	public function markPostitAsDone()
	{
		$datas['done_by'] = $this->data['user']['id'];
		$this->nx_client->update('PostIt', $_POST['post-it-id'], $datas);

		$notif = [
			'text' => 'Post-it traité avec success',
			'type' => 'success'
		];

		$this->session->set_flashdata('notif', $notif);
		redirect(site_url('dashboard'));
	}

	// public function channelSynchro()
	// {

	// 	//Step 1 
	// 	//Switch to check what channel manager we have

	// 	//1 - Smoobu
	// 	//Get list of bookings

	// 	$url = 'https://login.smoobu.com/api/me';




	// 	$header = [
	// 		// 			'User-Agent' => 'PostmanRuntime/7.31.1',
	// 		// 'Accept' => '*/*',
	// 		// 'Accept-Encoding' => 'gzip, deflate, br',
	// 		// 'X-Content-Type-Options' => 'nosniff',
	// 		'API-Key' => $this->data['user']['channel_api']
	// 	];




	// 	$curl = curl_init($url);
	// 	curl_setopt($curl, CURLOPT_HEADER, 1);
	// 	curl_setopt($curl, CURLOPT_HTTPHEADER, $header);
	// 	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');

	// 	// if ($params) {
	// 	// 	// curl_setopt($curl, CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);
	// 	// 	curl_setopt($curl, CURLOPT_POSTFIELDS, ($type == 'POST') ? $params : http_build_query($params));
	// 	// }

	// 	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	// 	$resp = curl_exec($curl);

	// 	var_dump($resp);
	// 	die();


	// 	$resp = trim(str_replace("HTTP/1.1 100 Continue", "", $resp));

	// 	list($headers, $content) = preg_split("/\n\s*?\n/m", $resp, 2);

	// 	if (strpos($headers, "Nx-Error")) {
	// 		$h = explode("\n", $headers);

	// 		$error = ['code' => 0, 'message' => "Unknown error"];
	// 		foreach ($h as $line) {
	// 			$tmp = explode(':', $line, 2);
	// 			switch (strtolower(trim($tmp[0]))) {
	// 				case "nx-error-code":
	// 					$error['code'] = (int) trim($tmp[1]);
	// 					break;

	// 				case "nx-error":
	// 					$error['message'] = trim($tmp[1]);
	// 					break;
	// 			}
	// 		}

	// 		throw new \Exception($error['message'], $error['code']);

	// 		die();
	// 	}

	// 	// var_dump(['$type' => $type, '$url' => $url, 'headers' => $headers]);
	// 	if (strpos($headers, "Nx-Total-Rows")) {
	// 		$h = explode("\n", $headers);

	// 		foreach ($h as $line) {
	// 			$tmp = explode(':', $line, 2);
	// 			switch (strtolower(trim($tmp[0]))) {
	// 				case "nx-total-rows":
	// 					$this->total_rows = (int) trim($tmp[1]);
	// 					break;
	// 			}
	// 		}
	// 	}

	// 	return json_decode(trim($content), true);

	// 	//Get each messages per booking
	// 	//Check if we already have the message in our DB, if not, we add the missing items


	// }

	public function children()
	{
		$this->data['children'] = $this->nx_client->getList('User', ['fields' => 'id,username,creation_date', 'filter' => ['father,eq,' . $this->data['user']['id']]]);

		$this->data['page_type'] = 'profile';
		$this->data['page_title'] = 'Filleuls';

		$this->load->view('head', $this->data);
		$this->load->view('profile/children');
		$this->load->view('foot');
	}

	public function portal()
	{
		$this->data['children'] = $this->nx_client->getList('User', ['fields' => 'id,username,creation_date', 'filter' => ['father,eq,' . $this->data['user']['id']], 'order' => 'id desc']);
		$this->data['payments'] = $this->nx_client->getList('Payment', ['filter' => ['user_id,eq,' . $this->data['user']['id']], 'order' => 'id desc']);

		$this->data['page_type'] = 'portal';
		$this->data['page_title'] = 'Portail d\'affiliation';

		$this->load->view('head', $this->data);
		$this->load->view('profile/children');
		$this->load->view('foot');
	}

	public function updatePM()
	{

		try {
			$this->nx_client->update('User', $this->data['user']['id'], $_POST);

			$notif = [
				'text' => 'Vos modifications ont bien été prises en compte.',
				'type' => 'success'
			];
		} catch (Exception $e) {
			$notif = [
				'text' => 'Erreur lors de la modification de votre profil. Veuillez nous contacter',
				'type' => 'error'
			];
		}


		$this->session->set_flashdata('notif', $notif);

		redirect(site_url('account/portal'));
	}
}
