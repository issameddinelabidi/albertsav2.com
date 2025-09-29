<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();

		$this->per_page = 1000;

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

		$this->data['is_dash'] = 'dashboard';
	}

	protected function getAllDatas($filter, $start_limit, $end_limit, $calc_rows)
	{
		$datas = [
			'datas_list' => $this->nx_client->getList('TicketList', ['filter' => [$filter], 'limit' => $start_limit . ',' . $end_limit, 'calc_rows' => 1]),
			'total_rows' => $this->nx_client->total_rows
		];

		return $datas;
	}

	protected function countAllDatas($filter)
	{
		$datas = [
			'datas_list' => $this->nx_client->getList('TicketList', ['fields' => 'id', 'filter' => [$filter], 'calc_rows' => 1]),
			'total_rows' => $this->nx_client->total_rows
		];

		return $datas;
	}

	public function index()
	{
		$this->data['page_type'] = 'dashboard';
		$this->data['page_title'] = 'Dashboard';

		$this->data['annonces_to_review'] = false;

		if ($this->data['user']['access_level'] > 10) {
			$user_filter = [];
		} else {
			$user_filter = ['user_unique_id,eq,' . $this->data['user']['unique_id']];
		}

		if ($this->data['user']['id'] == '1') {
			APPUP::writeLog('test log');
		}

		array_push($user_filter, 'platform_lang,in,' . $this->data['user']['platforms_to_deal_with']);

		$this->data['annonces_list'] = $this->nx_client->getList('AnnonceList', ['fields' => 'id,unique_id,user_unique_id,title,to_review,annonces_to_review,username,zipcode,city,country,type,deleted,channel_item_id,member_until,active_plan,platform_reference,platform_lang', 'filter' => $user_filter, 'order' => 'title asc', 'limit' => 400]);

		if ($this->data['user']['access_level'] > 10) {
			foreach ($this->data['annonces_list'] as $annonce) {
				if (!empty($annonce['to_review']) && empty($annonce['is_reviewed_by_agent'])) {
					$this->data['annonces_to_review'] = true;
					break;
				}
			}

			$this->data['post_its_list'] = $this->nx_client->getList('PostItList', ['filter' => ['done_by,eq,0']]);
		}

		// $this->data['nb_annonces'] = (!empty($this->data['annonces_list'])) ? count($this->data['annonces_list']) : 0;

		// $this->data['available_annonces'] = $this->data['user']['max_annonces'] - $this->data['nb_annonces'];
		// $this->data['percentage'] = $this->data['nb_annonces'] * 100 / $this->data['user']['max_annonces'];

		if ($this->data['user']['access_level'] == 10) {
			$this->data['guide_logs'] = $this->nx_client->getList('GuideLogList', ['filter' => ['user_unique_id,eq,' . $this->data['user']['unique_id']], 'order' => 'id desc', 'limit' => '5']);
		}

		if (!empty($this->data['user']['channel_manager_used'])) {
			$this->data['gradient'] = 7;

			if (!empty($this->data['user']['channel_api'])) {
				$empty_annonces = $this->nx_client->getList('Annonce', ['fields' => 'id,channel_item_id,deleted', 'filter' => ['channel_item_id,null', 'deleted,eq,0']]);

				if (!empty($empty_annonces)) {
					$this->data['annonce_channel_link_missing'] = false;
					$this->data['gradient'] = 7;
				} else {
					$this->data['annonce_channel_link_missing'] = true;
					$this->data['gradient'] = 7;
				}
			}
		}

		//Check if annonces are up to date
		$this_month = date('Y-m-01 00:00:01');

		$this->data['check_up_to_date'] = false;

		if ($this->data['user']['access_level'] == 10) {
			$this->data['check_up_to_date'] = $this->nx_client->getList('AnnonceUpToDate', ['filter' => ['user_id,eq,' . $this->data['user']['id'], 'creation_date,ge,' . $this_month]]);
		} else {
			$this->data['check_up_to_date'] = true;
		}

		$this->load->view('head', $this->data);
		$this->load->view('dashboard/main');
		$this->load->view('foot');
	}

	public function toReview()
	{
		$this->data['page_type'] = 'dashboard';
		$this->data['page_title'] = 'Annonces à vérifier';

		$this->data['annonces_to_review'] = [];

		if ($this->data['user']['access_level'] > 10) {
			$user_filter = '';

			$this->data['annonces_to_review'] = $this->nx_client->getList('AnnonceList', ['filter' => ['to_review,eq,1', 'is_reviewed_by_agent,eq,0']]);
		} else {
			redirect(site_url());
		}


		$this->data['nb_annonces'] = (!empty($this->data['annonces_list'])) ? count($this->data['annonces_list']) : 0;

		$this->data['available_annonces'] = $this->data['user']['max_annonces'] - $this->data['nb_annonces'];
		$this->data['percentage'] = $this->data['nb_annonces'] * 100 / $this->data['user']['max_annonces'];


		$this->load->view('head', $this->data);
		$this->load->view('dashboard/to_review');
		$this->load->view('foot');
	}

	/*
	public function whiteBook()
	{
		$this->data['page_type'] = 'dashboard';
		$this->data['page_title'] = 'Livre blanc';

		// if (!empty($_GET['type'])) {
		// 	switch ($_GET['type']) {
		// 		case 'guides':
		// 			$filter_type = 'type,eq,guide';
		// 			$this->data['page_title'] = 'Livre blanc Guides';
		// 			break;
		// 		case 'team':
		// 			$filter_type = 'type,eq,ticket';
		// 			$this->data['page_title'] = 'Livre blanc Equipe Albert';
		// 			break;

		// 		default:
		// 			$filter_type  = '';
		// 			$this->data['page_title'] = 'Livre blanc';
		// 			break;
		// 	}
		// }

		$user_filter = 'user_unique_id,eq,' . $this->data['user']['unique_id'];

		if (!empty($this->uri->segment(2))) {
			if ($this->data['user']['access_level'] > 10) {
				$user_filter = 'user_unique_id,eq,' . $this->uri->segment(2);
			}
		}

		// $this->data['annonces_list'] = $this->nx_client->getList('AnnonceList', ['filter' => [$user_filter]]);
		$this->data['tickets'] = $this->nx_client->getList('WhiteBook', ['filter' => [$user_filter, 'content,nnull'], 'order' => 'creation_date desc', 'limit' => 100]);

		$this->load->view('head', $this->data);
		$this->load->view('dashboard/white_book');
		$this->load->view('foot');
	}
*/

	public function whiteBook()
	{


		$this->data['page_type'] = 'dashboard';
		$this->data['page_title'] = 'Livre blanc';

		if (!empty($this->uri->segment(2))) {

			//Get mes annonces
			$list_annonces = array_column($this->nx_client->getList('Annonce', ['filter' => ['user_unique_id,eq,' . $this->data['user']['unique_id']], 'fields' => 'id,user_unique_id']), 'id');
			$annonces_list = implode(',', $list_annonces);


			switch ($this->uri->segment(2)) {
				case 'guides':
					$filter_type = 'type,eq,guide';
					$this->data['page_title'] = 'Livre blanc Guides';
					$view_to_load = 'white_book_guides';


					$this->data['guides'] = $this->nx_client->getList('GuideLogList', ['filter' => ['annonce_id,in,' . $annonces_list], 'order' => 'creation_date desc', 'limit' => 200]);

					break;
				case 'team':
					$filter_type = 'type,eq,ticket';
					$this->data['page_title'] = 'Livre blanc Equipe Albert';

					$this->data['tickets'] = $this->nx_client->getList('TicketList', ['filter' => ['annonce_id,in,' . $annonces_list], 'order' => 'creation_date desc', 'limit' => 200]);
					$view_to_load = 'white_book_tickets';
					break;

				default:
					$filter_type  = '';
					$this->data['page_title'] = 'Livre blanc';
					break;
			}
		} else {
			redirect(site_url());
		}

		$this->load->view('head', $this->data);
		$this->load->view('dashboard/' . $view_to_load);
		$this->load->view('foot');
	}

	public function dailyCalls()
	{
		$this->data['page_type'] = 'calls';
		$this->data['page_title'] = 'Daily Calls';
		$this->data['is_dash'] = false;

		$this->data['bookings_to_call'] = $this->nx_client->getList('BookingList', ['filter' => ['booking_start_date,eq,' . date('Y-m-d')]]);

		$this->load->view('head', $this->data);
		$this->load->view('dashboard/daily_calls');
		$this->load->view('foot');
	}

	public function noticeAlbert()
	{
		if (empty($this->data['user']['active_plan'])) {
			$this->data['user']['active_plan'] = 1;
		}

		$get_file = $this->nx_client->getList('File', ['filter' => ['type,eq,notice' . $this->data['user']['active_plan']], 'limit' => 1, 'order' => 'id desc']);

		if (!empty($get_file)) {
			redirect($get_file[0]['url']);
		}

		$notif = [
			'text' => 'Notice non trouvée.',
			'type' => 'error'
		];

		$this->session->set_flashdata('notif', $notif);
		redirect(site_url('dashboard'));
	}

	public function beds24Activations()
	{
		if ($this->data['user']['access_level'] <= 10) {
			redirect(site_url());
		}

		$this->data['page_type'] = 'calls';
		$this->data['page_title'] = 'Activations Beds24';
		$this->data['is_dash'] = false;

		$this->data['users_list'] = $this->nx_client->getList('User', ['fields' => 'id,unique_id,username,email,channel_manager_used,deleted,beds24_invite_code,beds24_refresh_token,beds24_auth_token,beds24_auth_token_last_refresh', 'filter' => ['channel_manager_used,eq,1', 'member_until,ge,' . date('Y-m-d H:i:s')]]);

		$unique_ids = implode(',', array_column($this->data['users_list'], 'unique_id'));

		$properties = $this->nx_client->getList('Annonce', ['fields' => 'id,unique_id,user_unique_id,title,beds24_property_id,beds24_room_id', 'filter' => ['user_unique_id,in,' . $unique_ids], 'order' => 'title asc']);

		// Ajouter un tableau 'properties' à chaque utilisateur
		foreach ($this->data['users_list'] as &$user) {
			$user['properties'] = [];

			// Associer les propriétés correspondant à chaque utilisateur
			foreach ($properties as $property) {
				if ($property['user_unique_id'] == $user['unique_id']) {
					$user['properties'][] = $property;
				}
			}
		}

		$this->load->view('head', $this->data);
		$this->load->view('dashboard/beds24_activations');
		$this->load->view('foot');
	}
}
