<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
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

	public function view()
	{
		$user_unique_id = $this->uri->segment(2);

		$continue = false;
		if ($this->data['user']['unique_id'] == $user_unique_id || $this->data['user']['access_level'] > 10) {
			$continue = true;
		}

		if (empty($continue)) {
			redirect(site_url('dashboard'));
		}

		$get_profile = $this->nx_client->getList('User', ['filter' => ['unique_id,eq,' . $user_unique_id]]);

		if (empty($get_profile)) {

			$notif = [
				'text' => 'Profil introuvable',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);

			redirect(site_url('dashboard'));
		} else {
			$this->data['profile'] = $get_profile[0];
		}

		$user_filter = 'user_unique_id,eq,' . $this->data['profile']['unique_id'];
		$this->data['annonces_list'] = $this->nx_client->getList('AnnonceList', ['filter' => [$user_filter]]);

/*
		if (!empty($this->data['profile']['promo_code'])) {

			if (!empty($this->data['profile']['is_from_first_stripe_account'])) {
				$stripe = new \Stripe\StripeClient(getenv('STRIPE_SK'));
			} else {
				$stripe = new \Stripe\StripeClient(STRIPE_SK);
			}

			$this->data['coupon'] = $stripe->coupons->retrieve($this->data['profile']['promo_code'], []);

			$to_pay = $this->data['profile']['subscription_price'] - round($this->data['profile']['subscription_price'] * $this->data['coupon']->percent_off / 100);

			$this->data['amount_to_send'] = round($to_pay * $this->data['coupon']->times_redeemed * 10 / 100);
		}
*/


		$this->data['page_type'] = 'profile';
		$this->data['page_title'] = 'Profil de ' . $this->data['profile']['username'];

		$this->load->view('head', $this->data);
		$this->load->view('profile/main');
		$this->load->view('foot');
	}

	public function edit()
	{
		$user_unique_id = $this->uri->segment(3);

		$continue = false;
		if ($this->data['user']['unique_id'] == $user_unique_id || $this->data['user']['access_level'] > 10) {
			$continue = true;
		}

		if (empty($continue)) {
			redirect(site_url('dashboard'));
		}


		$get_profile = $this->nx_client->getList('User', ['filter' => ['unique_id,eq,' . $user_unique_id]]);

		if (empty($get_profile)) {

			$notif = [
				'text' => 'Profil introuvable',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);

			redirect(site_url('dashboard'));
		} else {
			$this->data['profile'] = $get_profile[0];
		}

		$this->data['page_type'] = 'profile';
		$this->data['page_title'] = 'Modification du profil';

		if (!empty($this->data['profile']['promo_code'])) {
			$stripe = new \Stripe\StripeClient(
				STRIPE_SK
			);

			$this->data['coupon'] = $stripe->coupons->retrieve($this->data['profile']['promo_code'], []);

			$to_pay = $this->data['profile']['subscription_price'] - round($this->data['profile']['subscription_price'] * $this->data['coupon']->percent_off / 100);

			$this->data['amount_to_send'] = round($to_pay * $this->data['coupon']->times_redeemed * 10 / 100);
		}

		$this->load->view('head', $this->data);
		$this->load->view('profile/edit');
		$this->load->view('foot');
	}

	public function updateProfile()
	{
		$user_unique_id = $_POST['user_unique_id'];

		$continue = false;
		if ($this->data['user']['unique_id'] == $user_unique_id || $this->data['user']['access_level'] > 10) {
			$continue = true;
		}

		if (empty($continue)) {
			$notif = [
				'text' => 'Accès refusé.',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('dashboard'));
		}


		$get_profile = $this->nx_client->getList('User', ['filter' => ['unique_id,eq,' . $user_unique_id]]);

		if (empty($get_profile)) {

			$notif = [
				'text' => 'Profil introuvable',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);

			redirect(site_url('dashboard'));
		} else {
			$this->data['profile'] = $get_profile[0];
		}

		try {
			$this->nx_client->update('User', $this->data['profile']['id'], $_POST);

			$notif = [
				'text' => 'Vos modifications ont bien été prises en compte.',
				'type' => 'success'
			];

			$this->session->set_flashdata('notif', $notif);

			redirect(site_url('user/' . $this->data['profile']['unique_id']));
		} catch (Exception $e) {
			var_dump($e);
			die();
			$notif = [
				'text' => 'Erreur lors de la modification de votre profil. Veuillez nous contacter',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);

			redirect(site_url('account'));
		}
	}

	public function updateAffiliation()
	{

		$user_unique_id = $_POST['user_unique_id'];

		$continue = false;
		if ($this->data['user']['access_level'] == 100) {
			$continue = true;
		}

		if (empty($continue)) {
			redirect(site_url('dashboard'));
		}

		$get_profile = $this->nx_client->getList('User', ['filter' => ['unique_id,eq,' . $user_unique_id]]);

		if (empty($get_profile)) {

			$notif = [
				'text' => 'Profil introuvable',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);

			redirect(site_url('dashboard'));
		} else {
			$profile = $get_profile[0];
		}

		if (!empty($profile['promo_code'])) {
			redirect(site_url('dashboard'));
		}

		//Check if promo code exists
		$stripe = new \Stripe\StripeClient(
			STRIPE_SK
		);

		$_POST['promo_code'] = trim($_POST['promo_code']);

		try {
			$coupon = $stripe->coupons->retrieve($_POST['promo_code'], []);
		} catch (Exception $e) {
			$notif = [
				'text' => $e->getMessage(),
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('user/edit/' . $_POST['user_unique_id']));
		}

		$datas = [
			'promo_code' => $_POST['promo_code'],
			'subscription_price' => $_POST['subscription_price']
		];

		$this->nx_client->update('User', $profile['id'], $datas);
		redirect(site_url('user/edit/' . $_POST['user_unique_id']));
	}
}
