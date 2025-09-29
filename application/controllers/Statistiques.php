<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Statistiques extends CI_Controller
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

	public function index()
	{
		$this->data['page_type'] = 'stats';
		$this->data['page_title'] = 'Statistiques de vos annonces';

		$this->data['wanted_period'] = 'daily';

		if (!empty($_GET['period'])) {
			switch ($_GET['period']) {
				case 'daily':
				case 'weekly':
				case 'monthly':
				case 'all_time':
					$this->data['wanted_period'] = $_GET['period'];
					break;
			}
		}

		$this->data['items_list'] = $this->nx_client->patch('User', $this->data['user']['id'], 'statsCounter', ['period' => $this->data['wanted_period']]);

		$charts = [
			'calls' => 0,
			'messages' => 0,
			'events' => 0
		];

		$real_items = [];
		if (!empty($this->data['items_list'])) {
			foreach ($this->data['items_list'] as $item) {

				$item['counter'] = $item['call_count'] + $item['message_count'] + $item['event_count'];

				$charts['calls'] += $item['call_count'];
				$charts['messages'] += $item['message_count'];
				$charts['events'] += $item['event_count'];

				array_push($real_items, $item);
			}
		}

		$this->data['items_list'] = $real_items;

		$this->data['is_empty_chart'] = empty(array_filter($charts));

		$this->data['chart_stats'] = $charts;

		$this->load->view('head', $this->data);
		$this->load->view('stats/main');
		$this->load->view('foot');
	}
}
