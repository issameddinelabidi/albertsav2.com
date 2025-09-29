<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
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
			$this->nx_client = new NxClient([WS_URL, null, null, null]);
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

		if (!empty($_GET['affiliation'])) {
			setcookie("affiliation", $_GET['affiliation'], time() + (3600 * 24 * 7), "/");  /* expire dans 7 an */
		}

		// if (!empty($_COOKIE['affiliation'])){
		// 	die('On a un parrain');
		// }


		$this->data['page_type'] = 'home';
		$this->data['page_title'] = 'Service client pour location courte durée';

		$this->data['reviews'] = $this->nx_client->getList('Review', ['order' => 'id desc']);

		$this->data['blog_list'] = $this->nx_client->getList('ArticleList', ['filter' => ['is_draft,eq,0'], 'order' => 'id desc', 'limit' => 3]);

		$this->load->view('head', $this->data);

		if (APPUP::isAlbertAfrica()) {
			$this->load->view('home-maroc');
		} else {
			$this->load->view('home_v2');
		}

		$this->load->view('foot');
	}

	public function guides()
	{
		$this->data['page_type'] = 'home';
		$this->data['page_title'] = 'Guides voyageurs pour vos locations courtes durées';
		$this->data['page_style'] = 'dark';

		$this->data['dont_show'] = true;

		$this->load->view('head', $this->data);
		$this->load->view('guides');
		$this->load->view('foot');
	}

	public function login()
	{
		$this->data['page_type'] = 'login';
		$this->data['page_title'] = 'Connexion ALBERT';

		$this->load->view('head', $this->data);
		$this->load->view('guest/login');
		$this->load->view('foot');
	}

	public function register()
	{
		$this->data['page_type'] = 'register';
		$this->data['page_title'] = 'Inscription ALBERT';

		$this->load->view('head', $this->data);
		$this->load->view('guest/register');
		$this->load->view('foot');
	}

	public function passwordForgot()
	{
		$this->data['page_title'] = 'Mot de passe oublié';
		$this->data['page_type'] = 'password_forgot';

		$this->load->view('head', $this->data);
		$this->load->view('guest/password_forgot');
		$this->load->view('foot');
	}

	public function acceptCookies()
	{
		$endpoint = JWT::decode($_GET['token'], JWT_KEY);

		$notif = [
			'text' => ALBERT_VOTRE_CHOIX_A_ETE_ENREGISTRE,
			'type' => 'success'
		];

		$this->session->set_flashdata('notif', $notif);

		setcookie("allow_cookie", 'yes', time() + (3600 * 24 * 365), "/");  /* expire dans 1 an */
		redirect($endpoint);
	}

	public function declineCookies()
	{
		$endpoint = JWT::decode($_GET['token'], JWT_KEY);

		$notif = [
			'text' => ALBERT_VOTRE_CHOIX_A_ETE_ENREGISTRE,
			'type' => 'success'
		];

		$this->session->set_flashdata('notif', $notif);

		setcookie("allow_cookie", 'no', time() + (3600 * 24 * 365), "/");  /* expire dans 1 an */
		redirect($endpoint);
	}
	public function page()
	{
		$slug_to_get = $this->uri->segment(1);
		// var_dump($slug_to_get);
		// die();


		$this->data['page'] = $this->nx_client->getList('Page', ['filter' => ['slug_fr,eq,' . $slug_to_get]])[0];


		$this->data['page_title'] = $this->data['page']['title'];
		$this->data['page_name'] = 'page';
		$this->data['page_type'] = 'page';

		$this->load->view('head', $this->data);
		$this->load->view('pages/page');
		$this->load->view('foot');
	}

	public function faq()
	{
		$this->data['page_title'] = ALBERT_FOIRE_AUX_QUESTIONS;
		$this->data['page_type'] = 'faq';
		$this->data['page_desc'] = ALBERT_NOUS_REPONDONS_A_TOUTES_VOS_QUESTIONS;

		$this->data['faq_main'] = $this->nx_client->getList('Faq', ['filter' => ['is_team,eq,0', 'mer_type,null'], 'order' => 'position asc']);
		$this->data['faq_content'] = $this->nx_client->getList('FaqQuestion', ['order' => 'position asc']);

		$this->load->view('head', $this->data);
		$this->load->view('pages/faq');
		$this->load->view('foot');
	}

	public function faqTeam()
	{
		if ($this->data['user']['access_level'] < 50) {
			redirect(site_url('foire-aux-questions'));
		}

		$this->data['page_title'] = ALBERT_FOIRE_AUX_QUESTIONS;
		$this->data['page_type'] = 'faq';
		$this->data['page_desc'] = ALBERT_NOUS_REPONDONS_A_TOUTES_VOS_QUESTIONS;
		$this->data['is_team'] = true;

		$this->data['faq_main'] = $this->nx_client->getList('Faq', ['filter' => ['is_team,eq,1', 'mer_type,null'], 'order' => 'position asc']);
		$this->data['faq_content'] = $this->nx_client->getList('FaqQuestion', ['order' => 'position asc']);

		$this->load->view('head', $this->data);
		$this->load->view('pages/faq');
		$this->load->view('foot');
	}

	public function merFree()
	{
		if (empty($this->data['user'])) {
			redirect(site_url('dashboard'));
		}

		APPUP::checkIfProfilComplete($this->data['user']);


		$this->nx_client->update('User', $this->data['user']['id'], ['onboarding' => 1]);

		$this->data['page_title'] = 'Mise en route GRATUITE';
		$this->data['page_type'] = 'faq';
		$this->data['is_mer'] = 'free';
		$this->data['page_desc'] = 'Mise en route Gratuite';

		$this->data['faq_main'] = $this->nx_client->getList('Faq', ['filter' => ['mer_type,eq,free'], 'order' => 'position asc']);
		$this->data['faq_content'] = $this->nx_client->getList('FaqQuestion', ['order' => 'position asc']);

		$this->load->view('head', $this->data);
		$this->load->view('pages/faq');
		$this->load->view('foot');
	}

	public function merPremium()
	{
		if (empty($this->data['user'])) {
			redirect(site_url('dashboard'));
		}

		APPUP::checkIfProfilComplete($this->data['user']);


		$this->nx_client->update('User', $this->data['user']['id'], ['onboarding' => 1]);

		$this->data['page_title'] = 'Mise en route PREMIUM';
		$this->data['page_type'] = 'faq';
		$this->data['is_mer'] = 'premium';
		$this->data['page_desc'] = 'Mise en route PREMIUM';

		$this->data['faq_main'] = $this->nx_client->getList('Faq', ['filter' => ['mer_type,eq,premium'], 'order' => 'position asc']);
		$this->data['faq_content'] = $this->nx_client->getList('FaqQuestion', ['order' => 'position asc']);

		$this->load->view('head', $this->data);
		$this->load->view('pages/faq');
		$this->load->view('foot');
	}

	public function faqLight()
	{
		$this->data['page_title'] = ALBERT_FOIRE_AUX_QUESTIONS;
		$this->data['page_type'] = 'faq';
		$this->data['page_desc'] = ALBERT_NOUS_REPONDONS_A_TOUTES_VOS_QUESTIONS;

		// $this->data['faq_main'] = $this->nx_client->getList('Faq', ['order' => 'position asc']);
		// $this->data['faq_content'] = $this->nx_client->getList('FaqList', ['order' => 'position asc']);

		$this->load->view('head', $this->data);
		$this->load->view('pages/faq_light');
		$this->load->view('foot');
	}

	public function ticketPublic()
	{
		switch ($this->uri->segment(1)) {
			case 'ticket_public':
				$endpoint = 'Ticket';
				break;
			case 'gticket_public':
				$endpoint = 'GuideLog';
				break;

			default:
				redirect(site_url());
				break;
		}

		$uuid = $this->uri->segment(2);

		$get_element = $this->nx_client->getList($endpoint, ['filter' => ['unique_id,eq,' . $uuid]]);

		if (empty($get_element)) {
			die('Ticket non trouvé, merci de vérifier la validité du lien ou contacter votre superviseur.');
		}

		$item = $get_element[0];

		try {
			//code...
			switch ($this->uri->segment(1)) {
				case 'ticket_public':
					$item['annonce'] = $this->nx_client->getOne('Annonce', $item['annonce_id'], []);
					$item['annonce_unique_id'] = $item['unique_id'];
					$item['files_list'] = $this->nx_client->getList('File', ['filter' => ['ticket_id,eq,' . $item['id']]]);
					break;
				case 'gticket_public':
				default:
					// $endpoint = 'GuideLog';
					$item['annonce'] = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $item['annonce_unique_id']]])[0];
					$get_files = $this->nx_client->getList('File', ['filter' => ['id,in,' . $item['files']]]);
					$item['files_list'] = $get_files;
					break;
			}
		} catch (Exception $e) {
		}

		$this->data['item'] = $item;

		$this->data['page_title'] = 'Ticket';
		$this->data['page_type'] = 'faq';
		$this->data['page_desc'] = 'Ticket';

		// $this->data['faq_main'] = $this->nx_client->getList('Faq', ['order' => 'position asc']);
		// $this->data['faq_content'] = $this->nx_client->getList('FaqList', ['order' => 'position asc']);

		$this->load->view('head', $this->data);
		$this->load->view('pages/ticket_public');
		$this->load->view('foot');
	}

	public function AiAnswers()
	{
		$this->data['page_title'] = 'Réponses IA';
		$this->data['page_type'] = 'ia_answers';
		$this->data['page_desc'] = 'Réponses IA';

		$this->data['answers'] = $this->nx_client->getList('Latestaimessage', ['order' => 'last_msg_at desc']);

		$this->load->view('head', $this->data);
		$this->load->view('dashboard/ai_answers_list');
		$this->load->view('foot');
	}

	public function AiAnswersDetails()
	{
		$this->data['page_title'] = 'Réponses IA';
		$this->data['page_type'] = 'ia_answers';
		$this->data['page_desc'] = 'Réponses IA';

		$booking_id = $this->uri->segment(3);

		$this->data['messages'] = $this->nx_client->getList('BookingMessage', ['filter' => ['booking_id,eq,' . $booking_id], 'order' => 'message_date desc']);

		$this->load->view('head', $this->data);
		$this->load->view('dashboard/ai_answers_detail');
		$this->load->view('foot');
	}
}
