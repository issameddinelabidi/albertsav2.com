<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guide extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->data['annonce_user_filter'] = '';
		//Check active user state
		if (!empty($_SESSION['basic'])) {
			$this->basic = $_SESSION['basic'];

			$this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic ' . $this->basic, 'Accept-Language: ' . LANG]]);

			try {
				$this->data['user'] = $this->nx_client->getOne('me', '', []);

				APPUP::checkIfProfilComplete($this->data['user']);

				if ($this->data['user']['access_level'] == 100) {
					$this->nx_client = new NxClient([WS_URL, null, null, ["Authorization: Basic " . $this->basic, 'Accept-Language: ' . LANG, "Send-All: 1"]]);
				}

				$this->data['annonce_user_filter'] = ($this->data['user']['access_level'] > 10) ? '' : 'user_unique_id,eq,' . $this->data['user']['unique_id'];
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
			$this->nx_client = new NxClient([WS_URL, null, null, ['Accept-Language: ' . LANG]]);
		}

		$this->data['config'] = $this->nx_client->getOne('Configuration', 1, []);

		if (!empty($this->data['user'])) {
			$this->data['home_link'] = site_url('dashboard');
		} else {
			$this->data['home_link'] = site_url();
		}

		$this->data['is_dash'] = 'dashboard';

		if (!empty($this->data['user'])) {
			if (!empty($this->data['user']) && $this->data['user']['access_level'] == 100) {
				$user_filter = ['deleted,eq,0'];
			} else {
				$user_filter = ['user_unique_id,eq,' . $this->data['user']['unique_id'], 'deleted,eq,0'];
			}
		}


		if (!empty($this->data['user'])) {
			$this->data['annonces_list'] = $this->nx_client->getList('AnnonceList', ['filter' => $user_filter]);

			$this->data['nb_annonces'] = (!empty($this->data['annonces_list'])) ? count($this->data['annonces_list']) : 0;

			$this->data['available_annonces'] = $this->data['user']['max_annonces'] - $this->data['nb_annonces'];
			$this->data['percentage'] = $this->data['nb_annonces'] * 100 / $this->data['user']['max_annonces'];
		}
	}

	public function index() {}

	public function handleGuide()
	{
		$uuid = $this->uri->segment(3);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		$this->data['page_type'] = 'manage_guide';
		$this->data['page_title'] = 'Guide Albert - ' . $this->data['annonce']['title'];

		$this->load->view('head', $this->data);
		$this->load->view('guide/handle_guide');
		$this->load->view('foot');
	}

	public function handleCleaningGuide()
	{

		$uuid = $this->uri->segment(3);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		$this->data['page_type'] = 'manage_guide';
		$this->data['page_title'] = 'Guide Albert - ' . $this->data['annonce']['title'];

		$this->data['cleaning_tasks'] = $this->nx_client->getList('CleaningTask', ['filter' => ['deleted,eq,0'], 'order' => 'name_fr asc']);
		$this->data['cleaning_inventory'] = $this->nx_client->getList('CleaningInventory', ['filter' => ['deleted,eq,0'], 'order' => 'name_fr asc']);

		$this->load->view('head', $this->data);
		$this->load->view('guide/handle_cleaning_guide');
		$this->load->view('foot');
	}

	public function checkValidity()
	{
		$uuid = $this->uri->segment(2);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('AnnonceList', ['filter' => ['unique_id,eq,' . $uuid/*, $this->data['annonce_user_filter']*/]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		$this->data['proprio'] = $this->nx_client->getList('User', ['filter' => ['unique_id,eq,' . $this->data['annonce']['user_unique_id']]])[0];


		$this->data['reglement_list'] = [];
		if (!empty($this->data['annonce']['reglement_list'])) {
			$this->data['reglement_list'] = $this->nx_client->getList('ReglementInterieur', ['filter' => ['id,in,' . $this->data['annonce']['reglement_list']]]);
		}

		//look for leaving procedure
		$get_procedure = $this->nx_client->getList('EntryProcedure', ['filter' => ['annonce_id,eq,' . $this->data['annonce']['id'], 'type,eq,leave', 'deleted,eq,0'], 'order' => 'position asc']);
		if (empty($get_procedure)) {
			$this->data['leaving_procedure'] = [];
		} else {
			$this->data['leaving_procedure'] = $get_procedure;
		}


		$booking_id = $this->uri->segment(3) ?? null;

		$this->data['current_booking'] = [];

		if (!empty($booking_id)) {
			$this->data['find_current_booking'] = $this->nx_client->getList('Booking', ['filter' => ['booking_id,eq,' . $booking_id, 'booking_start_date,le,' . date('Y-m-d 00:00:00'), 'booking_end_date,ge,' . date('Y-m-d 00:00:00')]]);

			$this->data['current_booking'] = $this->data['find_current_booking'][0] ?? [];
		}


		if ($this->data['annonce']['guide_state'] == 'check-in-done') {
			$this->data['depart_autonome'] = true;
			$this->data['show_chatbot'] = true;
		}

		if ($this->data['annonce']['guide_state'] == 'cleaning-done') {
			$this->data['show_chatbot'] = true;
		}

		if ($this->data['annonce']['guide_state'] == 'check-out-done') {
			$this->data['hide_main_elements'] = true;
		}


		$this->load->view('guide/head_guide', $this->data);
		switch ($this->data['annonce']['guide_state']) {
				//Display guide informations
			case 'check-in-done':
				// die('Logement occupé, on affiche le contenu');
				if ($this->data['annonce']['guide_mode'] == 'clean') {
					redirect(site_url());
				}
				$this->load->view('guide/check-in-done', $this->data);
				break;

				//Display full screen message about cleaning item
			case 'check-out-done':
				$this->load->view('guide/cleaning', $this->data);
				break;

				//Display cleaning 
			case 'cleaning-done':
				if ($this->data['annonce']['guide_mode'] == 'clean') {
					redirect(site_url());
				}
				// die('Logement prêt, on affiche le check-in possible');
				$this->load->view('guide/main', $this->data);
				break;
		}

		$this->load->view('guide/foot_guide');
	}

	public function preview()
	{
		$uuid = $this->uri->segment(3);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('AnnonceList', ['filter' => ['unique_id,eq,' . $uuid /*, $this->data['annonce_user_filter']*/]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		$this->data['proprio'] = $this->nx_client->getList('User', ['filter' => ['unique_id,eq,' . $this->data['annonce']['user_unique_id']]])[0];

		//look for entry procedure
		$get_procedure = $this->nx_client->getList('EntryProcedure', ['filter' => ['annonce_id,eq,' . $this->data['annonce']['id'], 'type,eq,entry', 'deleted,eq,0'], 'order' => 'position asc']);
		if (empty($get_procedure)) {
			$this->data['procedure_list'] = [];
		} else {
			$this->data['procedure_list'] = $get_procedure;
		}


		$this->data['reglement_list'] = [];
		if (!empty($this->data['annonce']['reglement_list'])) {
			$this->data['reglement_list'] = $this->nx_client->getList('ReglementInterieur', ['filter' => ['id,in,' . $this->data['annonce']['reglement_list']]]);
		}

		//look for leaving procedure
		$get_procedure = $this->nx_client->getList('EntryProcedure', ['filter' => ['annonce_id,eq,' . $this->data['annonce']['id'], 'type,eq,leave', 'deleted,eq,0'], 'order' => 'position asc']);
		if (empty($get_procedure)) {
			$this->data['leaving_procedure'] = [];
		} else {
			$this->data['leaving_procedure'] = $get_procedure;
		}


		if ($this->data['annonce']['guide_state'] == 'check-in-done') {
			$this->data['depart_autonome'] = true;
			$this->data['show_chatbot'] = true;
		}

		if ($this->data['annonce']['guide_state'] == 'cleaning-done') {
			$this->data['show_chatbot'] = true;
		}

		if ($this->data['annonce']['guide_state'] == 'check-out-done') {
			$this->data['hide_main_elements'] = true;
		}

		$this->data['is_preview_mode'] = true;

		$this->load->view('guide/head_guide', $this->data);
		if (!empty($_GET['action'])) {
			switch ($_GET['action']) {
				case 'check-in':
					$this->load->view('guide/check-in', $this->data);
					break;
				case 'check-in-done':
					$this->load->view('guide/check-in-done', $this->data);
					break;

				default:
					$this->load->view('guide/main', $this->data);
					break;
			}
		} else {
			$this->load->view('guide/main', $this->data);
		}

		$this->load->view('guide/foot_guide');
	}


	public function view()
	{
		$uuid = $this->uri->segment(3);

		$booking_id = $this->uri->segment(4) ?? null;

		$this->data['current_booking'] = [];

		if (!empty($booking_id)) {
			$this->data['find_current_booking'] = $this->nx_client->getList('Booking', ['filter' => ['booking_id,eq,' . $booking_id, 'booking_start_date,le,' . date('Y-m-d 00:00:00'), 'booking_end_date,ge,' . date('Y-m-d 00:00:00')]]);

			$this->data['current_booking'] = $this->data['find_current_booking'][0] ?? [];
		}


		//look for the annonce
		$get_annonce = $this->nx_client->getList('AnnonceList', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		$this->data['proprio'] = $this->nx_client->getList('User', ['filter' => ['unique_id,eq,' . $this->data['annonce']['user_unique_id']]])[0];

		//look for entry procedure
		$get_procedure = $this->nx_client->getList('EntryProcedure', ['filter' => ['annonce_id,eq,' . $this->data['annonce']['id'], 'type,eq,entry', 'deleted,eq,0'], 'order' => 'position asc']);
		if (empty($get_procedure)) {
			$this->data['procedure_list'] = [];
		} else {
			$this->data['procedure_list'] = $get_procedure;
		}

		//Check parking

		$this->data['reglement_list'] = [];
		if (!empty($this->data['annonce']['reglement_list'])) {
			$this->data['reglement_list'] = $this->nx_client->getList('ReglementInterieur', ['filter' => ['id,in,' . $this->data['annonce']['reglement_list']]]);
		}

		if ($this->data['annonce']['guide_mode'] == 'clean') {
			redirect(site_url());
		}

		$this->load->view('guide/head_guide', $this->data);

		if (!empty($_GET['action'])) {
			switch ($_GET['action']) {
				case 'check-in':
					$this->load->view('guide/check-in', $this->data);
					break;

				default:
					$this->load->view('guide/main', $this->data);
					break;
			}
		} else {
			$this->load->view('guide/main', $this->data);
		}
		$this->load->view('guide/foot_guide');
	}

	public function handleCheckIn()
	{
		//Redirect avec GET check-in-done
	}

	public function cleaningGuide()
	{
		$this->data['is_cleaning_mod'] = true;
		$uuid = $this->uri->segment(2);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('AnnonceList', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		if ($this->data['annonce']['guide_mode'] == 'inout') {
			redirect(site_url());
		}

		$this->data['proprio'] = $this->nx_client->getList('User', ['filter' => ['unique_id,eq,' . $this->data['annonce']['user_unique_id']]])[0];


		if ($this->data['annonce']['guide_state'] == 'check-out-done') {
			$this->data['cleaning_tasks'] = $this->nx_client->getList('CleaningTask', ['filter' => ['deleted,eq,0', 'id,in,' . $this->data['annonce']['tasks_list']], 'order' => 'name_fr asc']);


			$this->data['cleaning_inventory'] = $this->nx_client->getList('CleaningInventory', ['filter' => ['deleted,eq,0', 'id,in,' . $this->data['annonce']['inventory_list']], 'order' => 'name_fr asc']);

			$this->data['stocks'] = $this->nx_client->getList('Stock', ['filter' => ['annonce_unique_id,eq,' . $this->data['annonce']['unique_id'], 'inventory_id,in,' . $this->data['annonce']['inventory_list']]]);

			$this->data['real_stocks'] = [];
			foreach ($this->data['stocks'] as $k) {
				$this->data['real_stocks'][$k['inventory_id']] = $k['quantity'];
			}
		}

		$this->load->view('guide/head_guide', $this->data);
		switch ($this->data['annonce']['guide_state']) {
				//Display guide informations
			case 'check-in-done':
				$this->load->view('guide/actually-busy');
				// die('Logement occupé, on demande si on veut forcer le check out et débuter le ménage');
				break;

				//Display full screen message about cleaning item
			case 'check-out-done':
				$this->load->view('guide/clean_view');
				break;

				//Display cleaning 
			case 'cleaning-done':
				$this->load->view('guide/ready-for-check-in');
				// die('Logement prêt, on ne peut plus rien faire tant qu\'il n\'y a pas eu de check-in');
				break;
		}
		$this->load->view('guide/foot_guide');
	}

	public function markCheckInAsDone()
	{

		$bi = APPUP::getBrowserInfo();
		$_POST['type'] = 'check-in';
		$_POST['browser_infos'] = json_encode($bi);

		if (!empty($_POST['from_cleaning_view'])) {
			$_POST['name'] = 'Service nettoyage';

			$endpoint_redirect = 'cleaningGuide';
		} else {
			$endpoint_redirect = 'guide';
		}

		$uuid = $_POST['annonce_unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('AnnonceList', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		$_POST['user_unique_id'] = $this->data['annonce']['user_unique_id'];


		try {
			$this->nx_client->create('GuideLog', $_POST);
		} catch (Exception $e) {
		}

		$this->nx_client->patch('Annonce', $this->data['annonce']['id'], 'updateState', ['state' => 'check-in-done']);

		$notif = [
			'text' => ALBERT_BIENVENUE_DANS_VOTRE_LOGEMENT,
			'type' => 'success'
		];

		$this->session->set_flashdata('notif', $notif);

		$booking_redirect = '';
		if (!empty($_POST['booking_id'])) {
			$booking_redirect = '/' . $_POST['booking_id'];
		}

		redirect(site_url($endpoint_redirect . '/' . $_POST['annonce_unique_id']) . $booking_redirect);
	}

	public function previewCheckin()
	{
		redirect(site_url('guide/preview/' . $_POST['annonce_unique_id'] . '?action=check-in-done'));
	}

	public function markCheckOutAsDone()
	{

		$bi = APPUP::getBrowserInfo();
		$_POST['type'] = 'check-out';
		$_POST['browser_infos'] = json_encode($bi);

		$uuid = $_POST['annonce_unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('AnnonceList', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		$_POST['user_unique_id'] = $this->data['annonce']['user_unique_id'];

		$files_ids = [];

		if (!empty($_FILES)) {
			$nb_files = count($_FILES['file']['name']);

			if ($nb_files > 0) {
				try {
					for ($i = 0; $i < $nb_files; $i++) {
						if (!empty($_FILES['file']['tmp_name'][$i])) {
							$img_data = [
								'type' => 'guide_picture',
								'user_id' => '0',
								'annonce_id' => $this->data['annonce']['id'],
								'file' => new CurlFile($_FILES['file']['tmp_name'][$i], $_FILES['file']['type'][$i], $_FILES['file']['name'][$i])
							];

							try {
								$nx_action = $this->nx_client->create('File', $img_data);
							} catch (Exception $e) {
								var_dump($e);
								die();
							}

							// var_dump($nx_action);
							array_push($files_ids, $nx_action['id']);
						}
					}
				} catch (\Exception $e) {
					$notif = [
						'text' => $e->getMessage(),
						'type' => 'error'
					];

					$this->session->set_flashdata('notif', $notif);
				}
			}

			if (!empty($files_ids)) {
				$_POST['files'] = implode(',', $files_ids);
			}
		}

		if (empty($_POST['comment'])) {
			unset($_POST['comment']);
		}


		$this->nx_client->create('GuideLog', $_POST);

		if ($this->data['annonce']['guide_mode'] == 'inout') {
			$guide_state = 'cleaning-done';
		} else {
			$guide_state = 'check-out-done';
		}

		$this->nx_client->patch('Annonce', $this->data['annonce']['id'], 'updateState', ['state' => $guide_state]);

		if (!empty($_POST['from']) && $_POST['from'] == 'albert-team') {
			redirect(site_url('cleaningGuide/' . $this->data['annonce']['unique_id']));
		} else {
			redirect(site_url('merci-pour-votre-sejour'));
		}
	}

	public function markCleaningAsDone()
	{

		// die('bubu');
		$bi = APPUP::getBrowserInfo();
		$_POST['type'] = 'cleaning';
		$_POST['browser_infos'] = json_encode($bi);

		$uuid = $_POST['annonce_unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('AnnonceList', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		$_POST['user_unique_id'] = $this->data['annonce']['user_unique_id'];

		$files_ids = [];


		if (!empty($_FILES)) {
			$nb_files = count($_FILES['file']['name']);


			if ($nb_files > 0) {
				try {
					for ($i = 0; $i < $nb_files; $i++) {
						if (!empty($_FILES['file']['tmp_name'][$i])) {
							$img_data = [
								'type' => 'guide_picture',
								'user_id' => '0',
								'annonce_id' => $this->data['annonce']['id'],
								'file' => new CurlFile($_FILES['file']['tmp_name'][$i], $_FILES['file']['type'][$i], $_FILES['file']['name'][$i])
							];

							$nx_action = $this->nx_client->create('File', $img_data);

							// var_dump($nx_action);
							array_push($files_ids, $nx_action['id']);
						}
					}
				} catch (\Exception $e) {
					$notif = [
						'text' => $e->getMessage(),
						'type' => 'error'
					];

					$this->session->set_flashdata('notif', $notif);
				}
			}

			if (!empty($files_ids)) {
				$_POST['files'] = implode(',', $files_ids);
			}
		}

		$this->nx_client->create('GuideLog', $_POST);

		if ($this->data['annonce']['guide_mode'] == 'clean') {
			$guide_state = 'checkout-done';
		} else {
			$guide_state = 'cleaning-done';
		}

		$this->nx_client->patch('Annonce', $this->data['annonce']['id'], 'updateState', ['state' => $guide_state]);

		$notif = [
			'text' => ALBERT_LE_LOGEMENT_A_BIEN_ETE_MIS_A_JOUR,
			'type' => 'success'
		];

		//UPDATE STOCKS
		try {
			foreach ($_POST as $k => $quantity) {
				$element = explode('_', $k);
				if ($element[0] == 'item') {
					$inventory_id = $element[1];

					$datas = [
						'annonce_unique_id' => $_POST['annonce_unique_id'],
						'inventory_id' => $inventory_id,
						'quantity' => (int) $quantity
					];

					$this->nx_client->create('Stock', $datas);
				}
			}
		} catch (Exception $e) {
			$notif = [
				'text' => $e->getMessage(),
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
		}

		$this->session->set_flashdata('notif', $notif);

		redirect(site_url('merci-pour-votre-travail'));
	}

	public function thankyou()
	{
		$this->load->view('guide/thankyou');
	}

	public function thankyouCleaning()
	{
		$this->load->view('guide/thankyou_cleaning');
	}
}
