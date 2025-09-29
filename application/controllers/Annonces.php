<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Annonces extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		//Check active user state
		if (!empty($_SESSION['basic'])) {
			$this->basic = $_SESSION['basic'];

			$this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic ' . $this->basic, 'Accept-Language: ' . LANG, "Send-All: 1"]]);

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
			redirect(site_url('connexion'));
		}

		$this->data['config'] = $this->nx_client->getOne('Configuration', 1, []);

		if (!empty($this->data['user'])) {
			$this->data['home_link'] = site_url('dashboard');
		} else {
			$this->data['home_link'] = site_url();
		}

		$this->data['is_dash'] = 'dashboard';

		if ($this->data['user']['access_level'] == 100) {
			$user_filter = ['deleted,eq,0'];
		} else {
			$user_filter = ['user_unique_id,eq,' . $this->data['user']['unique_id'], 'deleted,eq,0'];
		}

		$this->data['annonces_list'] = $this->nx_client->getList('AnnonceList', ['filter' => $user_filter]);


		$this->data['nb_annonces'] = (!empty($this->data['annonces_list'])) ? count($this->data['annonces_list']) : 0;

		$this->data['available_annonces'] = $this->data['user']['max_annonces'] - $this->data['nb_annonces'];
		$this->data['percentage'] = $this->data['nb_annonces'] * 100 / $this->data['user']['max_annonces'];
	}

	public function index() {}

	public function quotaMax()
	{
		$this->data['page_type'] = 'dashboard';
		$this->data['page_title'] = 'Quota maximum atteint';

		$this->load->view('head', $this->data);
		$this->load->view('annonces/quota_max');
		$this->load->view('foot');
	}

	public function newAnnonce()
	{
		// if ($this->data['available_annonces'] == 0) {
		// 	// $notif = [
		// 	// 	'text' => 'Nous ne pouvez plus ajouter d\'annonces. Veuillez nous contacter.',
		// 	// 	'type' => 'error'
		// 	// ];

		// 	// $this->session->set_flashdata('notif', $notif);

		// 	redirect(site_url('quota-max-annonces-atteint'));
		// }

		$this->data['page_type'] = 'dashboard';

		$this->data['equipements_list'] = $this->nx_client->getList('Equipement', ['order' => 'name_' . LANG . ' asc']);
		$this->data['consommables_list'] = $this->nx_client->getList('Consommable', ['order' => 'name_' . LANG . ' asc']);
		$this->data['reglement_list'] = $this->nx_client->getList('ReglementInterieur', ['order' => 'name_' . LANG . ' asc']);
		$this->data['platforms_list'] = $this->nx_client->getList('plateformeLocation', ['order' => 'name asc']);
		$this->data['coffe_list'] = $this->nx_client->getList('CoffeType', ['order' => 'name asc']);

		$this->data['page_title'] = 'Nouvelle annonce';

		$this->load->view('head', $this->data);
		$this->load->view('annonces/new');
		$this->load->view('foot');
	}

	public function edit()
	{
		$uuid = $this->uri->segment(3);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}


		$this->data['page_type'] = 'dashboard';
		$this->data['page_title'] = 'Modification annonce';

		$this->data['equipements_list'] = $this->nx_client->getList('Equipement', ['order' => 'name_' . LANG . ' asc']);
		$this->data['consommables_list'] = $this->nx_client->getList('Consommable', ['order' => 'name_' . LANG . ' asc']);
		$this->data['reglement_list'] = $this->nx_client->getList('ReglementInterieur', ['order' => 'name_' . LANG . ' asc']);
		$this->data['platforms_list'] = $this->nx_client->getList('plateformeLocation', ['order' => 'name asc']);
		$this->data['coffe_list'] = $this->nx_client->getList('CoffeType', ['order' => 'name asc']);


		$this->load->view('head', $this->data);
		$this->load->view('annonces/edit');
		$this->load->view('foot');
	}

	public function add()
	{
		// if ($this->data['available_annonces'] == 0) {
		// 	$notif = [
		// 		'text' => 'Nous ne pouvez plus ajouter d\'annonces. Veuillez nous contacter.',
		// 		'type' => 'error'
		// 	];

		// 	$this->session->set_flashdata('notif', $notif);

		// 	redirect(site_url('dashboard'));
		// }

		$_POST['reglement_list'] = '';
		$_POST['equipements_list'] = '';
		$_POST['consommables_list'] = '';

		// if ($this->data['user']['active_plan'] > 1) {
		if (!empty($_POST['equipements'])) {
			$_POST['equipements_list'] = implode(',', $_POST['equipements']);
			unset($_POST['equipements']);
		}

		if (!empty($_POST['consommables'])) {
			$_POST['consommables_list'] = implode(',', $_POST['consommables']);
			unset($_POST['consommables']);
		}
		// }

		if (!empty($_POST['reglements'])) {
			$_POST['reglement_list'] = implode(',', $_POST['reglements']);
			unset($_POST['reglements']);
		}
		$_POST['user_unique_id'] = $this->data['user']['unique_id'];

		try {
			$notif = [
				'text' => 'Annonce ajoutée',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);
			$annonce = $this->nx_client->create('Annonce', $_POST);
		} catch (Exception $e) {
			$notif = [
				'text' => $e->getMessage(),
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('dashboard'));
		}

		// if ($this->data['user']['active_plan'] > 1) {
		$nb_files = count($_FILES['file']['name']);

		if ($nb_files > 0) {
			try {
				for ($i = 0; $i < $nb_files; $i++) {
					if (!empty($_FILES['file']['tmp_name'][$i])) {
						$img_data = [
							'type' => 'picture',
							'user_id' => $this->data['user']['id'],
							'annonce_id' => $annonce['value'],
							'file' => new CurlFile($_FILES['file']['tmp_name'][$i], $_FILES['file']['type'][$i], $_FILES['file']['name'][$i])
						];

						$nx_action = $this->nx_client->create('File', $img_data);

						$notif = [
							'text' => 'Annonce ajoutée',
							'type' => 'success'
						];

						$this->session->set_flashdata('notif', $notif);
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
		// }

		redirect(site_url('dashboard'));
	}



	public function update()
	{
		$uuid = $_POST['unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];

			if ($this->data['user']['access_level'] == 10 && $this->data['annonce']['user_unique_id'] != $this->data['user']['unique_id']) {
				die('Nous n\'êtes pas autorisé à modifier cette annonce.');
			}
		}

		$_POST['reglement_list'] = '';
		$_POST['equipements_list'] = '';
		$_POST['consommables_list'] = '';

		// if ($this->data['user']['active_plan'] > 1) {
		if (!empty($_POST['equipements'])) {
			$_POST['equipements_list'] = implode(',', $_POST['equipements']);
			unset($_POST['equipements']);
		}

		if (!empty($_POST['consommables'])) {
			$_POST['consommables_list'] = implode(',', $_POST['consommables']);
			unset($_POST['consommables']);
		}
		// }

		if (!empty($_POST['reglements'])) {
			$_POST['reglement_list'] = implode(',', $_POST['reglements']);
			unset($_POST['reglements']);
		}

		if (!empty($_POST['coffe_type'])) {
			$_POST['coffe_type'] = $_POST['coffe_type'][0];
		}


		if (!empty($_POST['beds24_property_id'])) {
			$_POST['beds24_property_id'] = trim($_POST['beds24_property_id']);
		}

		if (!empty($_POST['beds24_room_id'])) {
			$_POST['beds24_room_id'] = trim($_POST['beds24_room_id']);
		}

		try {
			$annonce = $this->nx_client->update('Annonce', $this->data['annonce']['id'], $_POST);

			$notif = [
				'text' => 'Annonce modifiée',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);
		} catch (Exception $e) {
			$notif = [
				'text' => $e->getMessage(),
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
		}


		redirect(site_url('annonce/' . $_POST['unique_id']));
	}

	public function viewAnnonce()
	{
		$uuid = $this->uri->segment(2);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		$this->data['guide_logs'] = $this->nx_client->getList('GuideLogList', ['filter' => ['annonce_unique_id,eq,' . $this->data['annonce']['unique_id']], 'order' => 'id desc', 'limit' => '5']);

		//Look for proprio
		$this->data['proprio'] = $this->nx_client->getList('User', ['filter' => ['unique_id,eq,' . $this->data['annonce']['user_unique_id']]])[0];


		// $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic ' . $this->basic, 'Accept-Language: ' . LANG]]);

		//look for pictures
		$get_pictures = $this->nx_client->getList('File', ['filter' => ['type,eq,picture', 'annonce_id,eq,' . $this->data['annonce']['id'], 'deleted,eq,0']]);
		if (empty($get_pictures)) {
			$this->data['pictures'] = [];
		} else {
			$this->data['pictures'] = $get_pictures;
		}

		$this->data['equipements_list'] = [];
		if (!empty($this->data['annonce']['equipements_list'])) {
			$this->data['equipements_list'] = $this->nx_client->getList('Equipement', ['filter' => ['id,in,' . $this->data['annonce']['equipements_list']]]);
		}

		$this->data['consommables_list'] = [];
		if (!empty($this->data['annonce']['consommables_list'])) {
			$this->data['consommables_list'] = $this->nx_client->getList('Consommable', ['filter' => ['id,in,' . $this->data['annonce']['consommables_list']]]);
		}

		$this->data['reglement_list'] = [];
		if (!empty($this->data['annonce']['reglement_list'])) {
			$this->data['reglement_list'] = $this->nx_client->getList('ReglementInterieur', ['filter' => ['id,in,' . $this->data['annonce']['reglement_list']]]);
		}

		$this->data['platforms_list'] = [];
		if (!empty($this->data['annonce']['location_platforms_list'])) {
			$this->data['platforms_list'] = $this->nx_client->getList('PlateformeLocation', ['filter' => ['id,in,' . $this->data['annonce']['location_platforms_list']]]);
		}
		$this->data['coffe_type'] = '';
		if (!empty($this->data['annonce']['coffe_type'])) {
			$this->data['coffe_type'] = $this->nx_client->getList('CoffeType', ['filter' => ['id,in,' . $this->data['annonce']['coffe_type']]]);
			if ($this->data['annonce']['coffe_type'] == 5) {
				$this->data['coffe_type'] = $this->data['annonce']['is_other_coffe_type'];
			} else {
				$this->data['coffe_type'] = $this->data['coffe_type'][0]['name'];
			}
		}

		$this->data['coffe_list'] = $this->nx_client->getList('CoffeType', ['order' => 'name asc']);


		$this->data['tickets_list'] = [];
		$this->data['tickets_list'] = $this->nx_client->getList('Ticket', ['filter' => ['annonce_id,eq,' . $this->data['annonce']['id'], 'deleted,eq,0'], 'order' => 'id desc']);

		$this->data['page_type'] = 'detail_annonce';
		$this->data['page_title'] = $this->data['annonce']['title'];

		$annonce_property_id = $this->data['annonce']['channel_item_id'];

		$this->data['current_booking'] = [];

		if (!empty($annonce_property_id)) {
			$this->data['find_current_booking'] = $this->nx_client->getList('Booking', ['filter' => ['property_id,eq,' . $annonce_property_id, 'booking_start_date,le,' . date('Y-m-d 00:00:00'), 'booking_end_date,ge,' . date('Y-m-d 00:00:00')]]);

			$this->data['current_booking'] = $this->data['find_current_booking'][0] ?? [];
		}


		$this->load->view('head', $this->data);
		$this->load->view('annonces/annonce_detail');
		$this->load->view('foot');
	}

	public function gallery()
	{
		$uuid = $this->uri->segment(3);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		//look for pictures
		$get_pictures = $this->nx_client->getList('File', ['filter' => ['type,eq,picture', 'annonce_id,eq,' . $this->data['annonce']['id'], 'deleted,eq,0']]);
		if (empty($get_pictures)) {
			$this->data['pictures'] = [];
		} else {
			$this->data['pictures'] = $get_pictures;
		}

		$this->data['page_type'] = 'detail_annonce';
		$this->data['page_title'] = $this->data['annonce']['title'];

		$this->load->view('head', $this->data);
		$this->load->view('annonces/gallery');
		$this->load->view('foot');
	}

	public function editPictures()
	{

		$uuid = $this->uri->segment(3);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		//Look for proprio
		$this->data['proprio'] = $this->nx_client->getList('User', ['filter' => ['unique_id,eq,' . $this->data['annonce']['user_unique_id']]])[0];


		//look for pictures
		$get_pictures = $this->nx_client->getList('File', ['filter' => ['type,eq,picture', 'annonce_id,eq,' . $this->data['annonce']['id']]]);
		if (empty($get_annonce)) {
			$this->data['pictures'] = [];
		} else {
			$this->data['pictures'] = $get_pictures;
		}

		$this->data['page_type'] = 'edit_pictures';
		$this->data['page_title'] = 'Modification photos';

		$this->load->view('head', $this->data);
		$this->load->view('annonces/edit_pictures');
		$this->load->view('foot');
	}

	public function remove()
	{
		$uuid = $this->uri->segment(3);

		// if ($this->data['user']['access_level'] != 100) {
		// 	die('Accès refusé');
		// }

		//look for the annonce
		// $get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid]]);
		// if (empty($get_annonce)) {
		// 	die('Annonce non trouvée.');
		// } else {
		// 	$annonce = $get_annonce[0];
		// }

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			if ($this->data['user']['access_level'] == 10 && $get_annonce[0]['user_unique_id'] != $this->data['user']['unique_id']) {
				die('Nous n\'êtes pas autorisé à modifier cette annonce.');
			}

			$annonce = $get_annonce[0];
		}

		try {
			$this->nx_client->delete('Annonce', $annonce['id']);

			$notif = [
				'text' => 'Annonce désactivée',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('dashboard'));
		} catch (Exception $e) {
			$notif = [
				'text' => 'Erreur lors de la suppression',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('annonce/' . $annonce['unique_id']));
		}
	}

	public function restore()
	{
		$uuid = $this->uri->segment(3);

		if ($this->data['user']['access_level'] != 100) {
			die('Accès refusé');
		}

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$annonce = $get_annonce[0];
		}

		try {
			$this->nx_client->update('Annonce', $annonce['id'], ['deleted' => 0]);

			$notif = [
				'text' => 'Annonce restaurée',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('dashboard'));
		} catch (Exception $e) {
			$notif = [
				'text' => 'Erreur lors de la restauration',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('annonce/' . $annonce['unique_id']));
		}
	}

	public function markAsVerified()
	{
		$uuid = $this->uri->segment(3);

		if ($this->data['user']['access_level'] < 50) {
			die('Accès refusé');
		}

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$annonce = $get_annonce[0];
		}

		try {
			$this->nx_client->update('Annonce', $annonce['id'], ['is_reviewed_by_agent' => 1]);

			$notif = [
				'text' => 'Annonce marquée comme vérifiée',
				'type' => 'success'
			];
		} catch (Exception $e) {
			$notif = [
				'text' => 'Erreur lors de la modification',
				'type' => 'error'
			];
		}

		$this->session->set_flashdata('notif', $notif);

		redirect(site_url('annonce/' . $annonce['unique_id']));
	}

	public function askForVerify()
	{
		$uuid = $this->uri->segment(3);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, 'user_unique_id,eq,' . $this->data['user']['unique_id']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$annonce = $get_annonce[0];
		}

		try {
			$this->nx_client->update('Annonce', $annonce['id'], ['to_review' => 1]);

			$notif = [
				'text' => 'Demande de vérification d\'annonce effectuée.',
				'type' => 'success'
			];
		} catch (Exception $e) {
			$notif = [
				'text' => 'Erreur lors de la modification',
				'type' => 'error'
			];
		}

		$this->session->set_flashdata('notif', $notif);

		redirect(site_url('annonce/' . $annonce['unique_id']));
	}

	public function removePicture()
	{
		$annonce_id = $_GET['annonce_id'];
		$picture_id = $_GET['picture_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $annonce_id, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$annonce = $get_annonce[0];
		}

		$annonce_id = $annonce['id'];

		//look for pictures
		$get_pictures = $this->nx_client->getList('File', ['filter' => ['id,eq,' . $picture_id, 'annonce_id,eq,' . $annonce_id]]);
		if (empty($get_annonce)) {
			die('Impossible de trouver la correspondance de la photo à supprimer.');
		} else {
			$pict = $get_pictures[0];

			try {
				$this->nx_client->delete('File', $pict['id']);

				$notif = [
					'text' => 'Photo correctement supprimée.',
					'type' => 'success'
				];

				$this->session->set_flashdata('notif', $notif);
				redirect(site_url('annonce/' . $_GET['annonce_id']));
			} catch (Exception $e) {
				var_dump($e);
				die();
				$notif = [
					'text' => 'Erreur lors de la suppression',
					'type' => 'error'
				];

				$this->session->set_flashdata('notif', $notif);
				redirect(site_url('annonce/' . $annonce['unique_id']));
			}
		}
	}

	public function setAsCover()
	{
		$annonce_id = $_GET['annonce_id'];
		$picture_id = $_GET['picture_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $annonce_id, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$annonce = $get_annonce[0];
		}

		$annonce_id = $annonce['id'];

		//look for pictures
		$get_pictures = $this->nx_client->getList('File', ['filter' => ['id,eq,' . $picture_id, 'annonce_id,eq,' . $annonce_id]]);
		if (empty($get_annonce)) {
			die('Impossible de trouver la correspondance de la photo à supprimer.');
		} else {
			$pict = $get_pictures[0];

			try {
				$this->nx_client->update('Annonce', $annonce['id'], ['guide_cover' => $pict['url']]);

				$notif = [
					'text' => 'Photo de couverture mise à jour.',
					'type' => 'success'
				];

				$this->session->set_flashdata('notif', $notif);
				redirect(site_url('annonce/gallery/' . $_GET['annonce_id']));
			} catch (Exception $e) {
				var_dump($e);
				die();
				$notif = [
					'text' => 'Erreur lors de la mise à jour',
					'type' => 'error'
				];

				$this->session->set_flashdata('notif', $notif);
				redirect(site_url('annonce/gallery/' . $annonce['unique_id']));
			}
		}
	}

	public function addPictures()
	{
		$uuid = $_POST['annonce_unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {

			if ($this->data['user']['access_level'] == 10 && $get_annonce[0]['user_unique_id'] != $this->data['user']['unique_id']) {
				die('Nous n\'êtes pas autorisé à modifier cette annonce.');
			}

			$annonce = $get_annonce[0];
		}

		$nb_files = count($_FILES['file']['name']);

		if ($nb_files > 0) {
			try {
				for ($i = 0; $i < $nb_files; $i++) {
					if (!empty($_FILES['file']['tmp_name'][$i])) {
						$img_data = [
							'type' => 'picture',
							'user_id' => $this->data['user']['id'],
							'annonce_id' => $annonce['id'],
							'file' => new CurlFile($_FILES['file']['tmp_name'][$i], $_FILES['file']['type'][$i], $_FILES['file']['name'][$i])
						];

						$nx_action = $this->nx_client->create('File', $img_data);

						$notif = [
							'text' => 'Photos ajoutées',
							'type' => 'success'
						];

						$this->session->set_flashdata('notif', $notif);
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

		redirect(site_url('annonce/' . $annonce['unique_id']));
	}

	public function addTicket()
	{

		$uuid = $_POST['annonce_id'];
		$real_uuid = $_POST['annonce_unique_id'];


		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $real_uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		try {
			$annonce = $this->nx_client->create('Ticket', $_POST);

			$nb_files = count($_FILES['file']['name']);


			if ($nb_files > 0) {
				try {
					for ($i = 0; $i < $nb_files; $i++) {
						if (!empty($_FILES['file']['tmp_name'][$i])) {
							$img_data = [
								'type' => 'ticket',
								'user_id' => $this->data['user']['id'],
								'ticket_id' => $annonce['value'],
								'file' => new CurlFile($_FILES['file']['tmp_name'][$i], $_FILES['file']['type'][$i], $_FILES['file']['name'][$i])
							];

							$nx_action = $this->nx_client->create('File', $img_data);
						}
					}
				} catch (\Exception $e) {
					var_dump($e);
					die();
				}
			}

			$notif = [
				'text' => 'Ticket ajouté',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);

			redirect(site_url('annonce/' . $real_uuid));
		} catch (Exception $e) {
			$notif = [
				'text' => $e->getMessage(),
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
		}

		redirect(site_url('annonce/' . $real_uuid));
	}

	public function removeTicket()
	{
		$ticket_id = $this->uri->segment(3);
		$annonce_id = $this->uri->segment(4);

		if ($this->data['user']['access_level'] < 50) {
			die('Accès refusé');
		}

		//look for the annonce
		$get_item = $this->nx_client->getList('Ticket', ['filter' => ['id,eq,' . $ticket_id]]);
		if (empty($get_item)) {
			die('Ticket non trouvée.');
		} else {
			$ticket = $get_item[0];
		}

		try {
			$this->nx_client->delete('Ticket', $ticket['id']);

			$notif = [
				'text' => 'Ticket Supprimé',
				'type' => 'success'
			];
		} catch (Exception $e) {
			$notif = [
				'text' => 'Erreur lors de la suppression',
				'type' => 'error'
			];
		}

		$this->session->set_flashdata('notif', $notif);
		redirect(site_url('annonce/' . $annonce_id));
	}

	public function editTicket()
	{
		$ticket_id = $this->uri->segment(3);
		$annonce_id = $this->uri->segment(4);

		if ($this->data['user']['access_level'] < 50) {
			die('Accès refusé');
		}

		//look for the annonce
		$get_item = $this->nx_client->getList('Ticket', ['filter' => ['id,eq,' . $ticket_id]]);
		if (empty($get_item)) {
			die('Ticket non trouvée.');
		} else {
			$this->data['ticket'] = $get_item[0];
		}


		$this->data['page_type'] = 'edit_ticket';
		$this->data['page_title'] = 'Modification ticket';

		$this->load->view('head', $this->data);
		$this->load->view('annonces/edit_ticket');
		$this->load->view('foot');
	}

	public function updateTicket()
	{
		$ticket_id = $_POST['ticket_id'];
		$annonce_id = $_POST['annonce_unique_id'];

		if ($this->data['user']['access_level'] < 50) {
			die('Accès refusé');
		}

		//look for the annonce
		$get_item = $this->nx_client->getList('Ticket', ['filter' => ['id,eq,' . $ticket_id]]);
		if (empty($get_item)) {
			die('Ticket non trouvée.');
		} else {

			//Handle if there are pictures to remove
			if (!empty($_POST['remove_picture'])) {
				foreach ($_POST['remove_picture'] as $pict_id) {
					$this->nx_client->delete('File', $pict_id, []);
					// var_dump($pict_id);
				}
			}

			try {
				$nb_files = count($_FILES['file']['name']);

				if ($nb_files > 0) {
					try {
						for ($i = 0; $i < $nb_files; $i++) {
							if (!empty($_FILES['file']['tmp_name'][$i])) {
								$img_data = [
									'type' => 'ticket',
									'user_id' => $this->data['user']['id'],
									'ticket_id' => $ticket_id,
									'file' => new CurlFile($_FILES['file']['tmp_name'][$i], $_FILES['file']['type'][$i], $_FILES['file']['name'][$i])
								];

								$nx_action = $this->nx_client->create('File', $img_data);
							}
						}
					} catch (\Exception $e) {
						var_dump($e);
						die();
					}
				}

				$this->nx_client->update('Ticket', $ticket_id, $_POST);

				$notif = [
					'text' => 'Ticket mis à jour',
					'type' => 'success'
				];
			} catch (Exception $e) {
				$notif = [
					'text' => 'Erreur lors de la mise à jour du ticket',
					'type' => 'error'
				];
			}
			$this->session->set_flashdata('notif', $notif);
		}

		redirect(site_url('annonce/' . $annonce_id));
	}

	public function entryProcedure()
	{

		$seg = explode('?type=', $this->uri->rsegment(3));

		switch ($seg[1]) {
			case 'leave':
				$this->data['procedure_type'] = 'leave';
				$this->data['page_title'] = 'Procédure de sortie';
				break;

			case 'entry':
				$this->data['procedure_type'] = 'entry';
				$this->data['page_title'] = 'Procédure d\'entrée';
				break;

			default:
				die('Erreur segment.');
				break;
		}

		$uuid = $this->uri->segment(3);

		$annonce_user_filter = ($this->data['user']['access_level'] > 10) ? '' : 'user_unique_id,eq,' . $this->data['user']['unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		//look for entry procedure
		$get_procedure = $this->nx_client->getList('EntryProcedure', ['filter' => ['annonce_id,eq,' . $this->data['annonce']['id'], 'type,eq,' . $this->data['procedure_type']], 'order' => 'position asc']);
		if (empty($get_procedure)) {
			$this->data['procedure_list'] = [];
		} else {
			$this->data['procedure_list'] = $get_procedure;
		}

		$this->data['page_type'] = 'manage_procedure';

		if (empty($this->data['procedure_list'])) {
			$this->data['can_duplicate'] = true;

			$this->data['selectable_annonces'] = $this->nx_client->getList('Annonce', ['fields' => 'unique_id,title', 'filter' => ['unique_id,neq,' . $uuid, 'deleted,eq,0', $this->data['annonce_user_filter']], 'order' => 'title asc']);
			if (empty($this->data['selectable_annonces'])) {
				$this->data['can_duplicate'] = false;
			}
		}

		$this->load->view('head', $this->data);
		$this->load->view('annonces/entry_procedures');
		$this->load->view('foot');
	}

	public function addProcedure()
	{
		unset($_POST['annonce_id']);
		$uuid = $_POST['annonce_unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		$_POST['annonce_id'] = $this->data['annonce']['id'];

		try {
			// var_dump($_FILES['file']['tmp_name']);
			// die();
			if (!empty($_FILES['file']['tmp_name'])) {
				$img_data = [
					'type' => 'step',
					'user_id' => $this->data['user']['id'],
					'annonce_id' => $this->data['annonce']['id'],
					'file' => new CurlFile($_FILES['file']['tmp_name'][0], $_FILES['file']['type'][0], $_FILES['file']['name'][0])
				];

				$nx_action = $this->nx_client->create('File', $img_data);

				$_POST['file'] = $nx_action['url'];
			}
		} catch (\Exception $e) {
			$notif = [
				'text' => $e->getMessage(),
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
		}

		$this->nx_client->create('entryProcedure', $_POST);

		$notif = [
			'text' => 'Etape ajoutée avec succès.',
			'type' => 'success'
		];

		$this->session->set_flashdata('notif', $notif);

		$endpoint_redirect = ($_POST['type'] == 'entry') ? 'entryProcedure' : 'leaveProcedure';
		redirect(site_url('annonce/' . $endpoint_redirect . '/' . $uuid));
	}

	public function editProcedure()
	{
		unset($_POST['annonce_id']);
		$uuid = $_POST['annonce_unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		$_POST['annonce_id'] = $this->data['annonce']['id'];


		try {
			if (!empty($_FILES['file']['tmp_name'][0])) {
				$img_data = [
					'type' => 'step',
					'user_id' => $this->data['user']['id'],
					'annonce_id' => $this->data['annonce']['id'],
					'file' => new CurlFile($_FILES['file']['tmp_name'][0], $_FILES['file']['type'][0], $_FILES['file']['name'][0])
				];

				$nx_action = $this->nx_client->create('File', $img_data);

				$_POST['file'] = $nx_action['url'];
			}
		} catch (\Exception $e) {
			$notif = [
				'text' => $e->getMessage(),
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
		}

		try {
			$this->nx_client->update('entryProcedure', $_POST['procedure_id'], $_POST);

			$notif = [
				'text' => 'Etape modifiée avec succès.',
				'type' => 'success'
			];
		} catch (Exception $e) {
			$notif = [
				'text' => $e->getMessage(),
				'type' => 'error'
			];
		}

		$this->session->set_flashdata('notif', $notif);

		$endpoint_redirect = ($_POST['type'] == 'entry') ? 'entryProcedure' : 'leaveProcedure';
		redirect(site_url('annonce/' . $endpoint_redirect . '/' . $uuid));
	}

	public function removeProcedure()
	{
		$uuid = $_POST['annonce_uuid'];

		$annonce_user_filter = ($this->data['user']['access_level'] > 10) ? '' : 'user_unique_id,eq,' . $this->data['user']['unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		// $annonce_id = $this->data['annonce']['id'];

		$get_procedure = $this->nx_client->getList('EntryProcedure', ['filter' => ['annonce_id,eq,' . $this->data['annonce']['id'], 'id,eq,' . $_POST['procedure_id']]]);
		if (empty($get_procedure)) {
			die('Procédure non trouvée.');
		} else {
			$proc = $get_procedure[0];
		}


		$action = $this->nx_client->delete('EntryProcedure', $proc['id']);

		$notif = [
			'text' => 'Etape supprimée avec succès.',
			'type' => 'success'
		];

		$this->session->set_flashdata('notif', $notif);

		$endpoint_redirect = ($proc['type'] == 'entry') ? 'entryProcedure' : 'leaveProcedure';
		redirect(site_url('annonce/' . $endpoint_redirect . '/' . $uuid));
	}

	public function restoreProcedure()
	{
		$uuid = $_POST['annonce_uuid'];

		$annonce_user_filter = ($this->data['user']['access_level'] > 10) ? '' : 'user_unique_id,eq,' . $this->data['user']['unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		// $annonce_id = $this->data['annonce']['id'];

		$get_procedure = $this->nx_client->getList('EntryProcedure', ['filter' => ['annonce_id,eq,' . $this->data['annonce']['id'], 'id,eq,' . $_POST['procedure_id']]]);
		if (empty($get_procedure)) {
			die('Procédure non trouvée.');
		} else {
			$proc = $get_procedure[0];
		}

		$action = $this->nx_client->update('EntryProcedure', $proc['id'], ['deleted' => 0]);

		$notif = [
			'text' => 'Etape restaurée avec succès.',
			'type' => 'success'
		];

		$this->session->set_flashdata('notif', $notif);

		$endpoint_redirect = ($proc['type'] == 'entry') ? 'entryProcedure' : 'leaveProcedure';
		redirect(site_url('annonce/' . $endpoint_redirect . '/' . $uuid));
	}

	public function updateTasksAndInventory()
	{

		$uuid = $_POST['annonce_unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		$_POST['tasks_list'] = (!empty($_POST['tasks'])) ? implode(',', $_POST['tasks']) : '';
		$_POST['inventory_list'] = (!empty($_POST['inventory'])) ? implode(',', $_POST['inventory']) : '';


		try {
			$annonce = $this->nx_client->update('Annonce', $this->data['annonce']['id'], $_POST);

			$notif = [
				'text' => 'Annonce mise à jour',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);
		} catch (Exception $e) {
			$notif = [
				'text' => $e->getMessage(),
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
		}

		redirect(site_url('guide/handleCleaningGuide/' . $uuid));
	}

	public function handleStocks()
	{
		$this->data['page_type'] = 'dashboard';

		$this->data['page_title'] = 'Gestion des stocks';

		$this->data['is_cleaning_mod'] = true;
		$uuid = $this->uri->segment(3);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		$this->data['cleaning_inventory'] = $this->nx_client->getList('CleaningInventory', ['filter' => ['deleted,eq,0', 'id,in,' . $this->data['annonce']['inventory_list']], 'order' => 'name_fr asc']);

		$this->data['stocks'] = $this->nx_client->getList('Stock', ['filter' => ['annonce_unique_id,eq,' . $this->data['annonce']['unique_id'], 'inventory_id,in,' . $this->data['annonce']['inventory_list']]]);

		$this->data['real_stocks'] = [];
		foreach ($this->data['stocks'] as $k) {
			$this->data['real_stocks'][$k['inventory_id']] = $k['quantity'];
		}

		$this->load->view('head', $this->data);
		$this->load->view('guide/stocks');
		$this->load->view('foot');
	}

	public function updateStocks()
	{

		$uuid = $_POST['annonce_unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

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

			$notif = [
				'text' => 'Stocks mis à jour',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);
		} catch (Exception $e) {
			$notif = [
				'text' => $e->getMessage(),
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
		}

		redirect(site_url('annonces/handleStocks/' . $this->data['annonce']['unique_id']));
	}

	public function viewMoves()
	{
		$uuid = $this->uri->segment(3);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$annonce = $get_annonce[0];
		}

		$this->data['guide_logs'] = $this->nx_client->getList('GuideLogList', ['filter' => ['annonce_unique_id,eq,' . $uuid], 'order' => 'id desc']);


		$this->data['page_type'] = 'detail_annonce';
		$this->data['page_title'] = 'Mouvements ' . $annonce['title'];

		$this->load->view('head', $this->data);
		$this->load->view('annonces/moves');
		$this->load->view('foot');
	}

	public function handleChannelID()
	{
		$uuid = $this->uri->segment(3);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}

		if (!empty($this->data['annonce']['channel_item_id'])) {
			die('Vous ne pouvez pas modifier cette information sans prendre le risque de rendre les conversations actuelles inexploitables. Nous avons donc désactivé cette fonctionnalité');
		}

		$this->data['page_type'] = 'channel_item';
		$this->data['page_title'] = 'ID Unique annonce ' . $this->data['annonce']['title'];

		$this->load->view('head', $this->data);
		$this->load->view('annonces/channel_item_id');
		$this->load->view('foot');
	}

	public function updateChannelItemID()
	{
		$uuid = $_POST['annonce_unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];

			if ($this->data['user']['access_level'] == 10 && $this->data['annonce']['user_unique_id'] != $this->data['user']['unique_id']) {
				die('Nous n\'êtes pas autorisé à modifier cette annonce.');
			}
		}

		try {
			$annonce = $this->nx_client->update('Annonce', $this->data['annonce']['id'], $_POST);

			$notif = [
				'text' => 'ID Unique channel manager mis à jour',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);
		} catch (Exception $e) {
			$notif = [
				'text' => $e->getMessage(),
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
		}

		redirect(site_url('annonce/' . $uuid));
	}

	public function updateEmbed()
	{
		$uuid = $_POST['annonce_unique_id'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];

			if ($this->data['user']['access_level'] <= 10 && $this->data['annonce']['user_unique_id'] != $this->data['user']['unique_id']) {
				die('Nous n\'êtes pas autorisé à modifier cette annonce.');
			}
		}

		try {
			$annonce = $this->nx_client->update('Annonce', $this->data['annonce']['id'], $_POST);

			$notif = [
				'text' => 'Cerveau mis à jour',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);
		} catch (Exception $e) {
			$notif = [
				'text' => $e->getMessage(),
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
		}

		redirect(site_url('annonce/' . $uuid));
	}

	public function duplicateProcedure()
	{


		$uuid = $_POST['annonce_unique_id'];
		$uuid2 = $_POST['wished_procedure'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée 1.');
		} else {
			$annonce_dest = $get_annonce[0];
			$get_annonce2 = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid2, $this->data['annonce_user_filter']]]);
			if (empty($get_annonce2)) {
				die('Annonce non trouvée 2.');
			} else {
				$annonce_ref = $get_annonce2[0];


				// $get_procedure

				$get_procedures = $this->nx_client->getList('EntryProcedure', ['filter' => ['type,eq,' . $_POST['type'], 'annonce_id,eq,' . $annonce_ref['id'], 'deleted,eq,0']]);

				$nb = 0;
				foreach ($get_procedures as $proc) {
					unset($proc['creation_date']);
					unset($proc['change_dt']);

					$proc['annonce_id'] = $annonce_dest['id'];

					$this->nx_client->create('EntryProcedure', $proc);
					$nb++;
				}

				$notif = [
					'text' => $nb . ' étapes ont été dupliquées',
					'type' => 'success'
				];

				$this->session->set_flashdata('notif', $notif);

				redirect(site_url('annonce/' . $_POST['type'] . 'Procedure/' . $annonce_dest['unique_id']));
			}
		}
	}

	public function manageGuide()
	{

		if ($this->data['user']['access_level'] < 10) {
			redirect(site_url());
		}

		$uuid = $this->uri->segment(3);

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$this->data['annonce'] = $get_annonce[0];
		}


		$this->data['page_type'] = 'settings_guide';
		$this->data['page_title'] = 'Paramétrage des guides';

		$this->load->view('head', $this->data);
		$this->load->view('annonces/guides');
		$this->load->view('foot');
	}

	public function updateGuideParams()
	{

		$uuid = $_POST['annonce_uuid'];

		//look for the annonce
		$get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['user_unique_id,eq,' . $this->data['user']['unique_id'], 'unique_id,eq,' . $uuid, $this->data['annonce_user_filter']]]);
		if (empty($get_annonce)) {
			die('Annonce non trouvée.');
		} else {
			$annonce = $get_annonce[0];
		}

		try {
			$this->nx_client->update('Annonce', $annonce['id'], ['guide_mode' => $_POST['guide_mode']]);

			$notif = [
				'text' => 'Paramètres enregistrés',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('annonce/manageGuide/' . $annonce['unique_id']));
		} catch (Exception $e) {
			$notif = [
				'text' => 'Erreur lors de la mise à jour des paramètres',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('annonce/manageGuide/' . $annonce['unique_id']));
		}
	}
}
