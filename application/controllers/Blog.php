<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
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
		$this->data['page_title'] = ALBERT_NOTRE_BLOG;
		$this->data['page_name'] = 'blog';
		$this->data['page_type'] = 'blog';
		$this->data['page_desc'] = ALBERT_TOUTE_LACTUALITE_ALBERT;

		$this->data['blog_list'] = $this->nx_client->getList('ArticleList', ['filter' => ['is_draft,eq,0'], 'order' => 'id desc']);

		$this->load->view('head', $this->data);
		$this->load->view('blog/list');
		$this->load->view('foot');
	}

	public function view()
	{
		switch ($this->uri->segment(3)) {
			case 'pourquoi-service-client-hotellerie':
				$article_id = 1;
				$ex_article = true;
				break;

			case 'quelles-sont-attentes-besoins-voyageurs-reservation':
				$article_id = 2;
				$ex_article = true;
				break;

			case 'comment-maximiser-gestion-locations-courtes-durees':
				$article_id = 3;
				$ex_article = true;
				break;

			case 'bonnes-raisons-externaliser-sav-hotellerie':
				$article_id = 4;
				$ex_article = true;
				break;

			case 'location-courte-duree-conseils-service-client-5-etoiles':
				$article_id = 5;
				$ex_article = true;
				break;

			default:
				$article_id = $this->uri->segment(2);
				$ex_article = false;
				break;
		}




		//Retrieve link
		try {
			$this->data['article'] = $this->nx_client->getOne('ArticleList', $article_id, []);
			$a_id = $this->data['article']['id'];

			if (!empty($ex_article)) {
				switch ($a_id) {
					case 1:
					case 2:
					case 3:
					case 4:
					case 5:
						redirect(site_url('blog/' . $a_id . '/' . $this->data['article']['slug']), 'location', 301);
						break;
				}
			}
		} catch (Exception $e) {
			$notif = [
				'text' => 'Impossible de trouver votre article. Merci de réessayer ou nous contacter',
				'type' => 'error'
			];

			$this->session->set_flashdata('notif', $notif);
			redirect(site_url('blog'));
		}


		$this->data['page_title'] = $this->data['article']['title'];
		$this->data['page_name'] = 'blog';
		$this->data['page_type'] = 'blog';
		$this->data['page_desc'] = $this->data['article']['hook'];

		$this->load->view('head', $this->data);
		$this->load->view('blog/detail');
		$this->load->view('foot');
	}


	/*

	public function generateHook()
	{

		$all_user = $this->nx_client->getList('User', ['fields' => 'id,stripe_sk']);
		// var_dump($all_user);

		$counter = 0;

		foreach ($all_user as $u) {
			if (!empty($u['stripe_sk'])) {
				try {
					$this->nx_client->patch('User', $u['id'], 'removeWebhook');
					$this->nx_client->patch('User', $u['id'], 'getWebhook');
				} catch (Exception $e) {
					
				}
				
				$counter++;
			}
		}

		echo $counter . ' hooks générés.';
		die();
	}

	
	public function testDoublon(){

		\Stripe\Stripe::setApiKey(getenv('STRIPE_SK'));

        $all_pi = \Stripe\PaymentIntent::all();

		// $to_delete = 'we_1L6x6LLhe8Op9CiHw6q0DCyL';



		$all_wh = \Stripe\WebhookEndpoint::all();
		// $all_wh->delete();
        var_dump($all_wh);


		
        die();

	}

	

	public function reuploadS3(){
		$all_contracts = $this->nx_client->getList('Contract', ['fields' => 'id,uuid,file_uuid', 'filter' => ['file_uuid,neq,']]);

		var_dump($all_contracts);
		die();
		foreach ($all_contracts As $contract){
			

			$md5 = md5_file($_FILES['file']['tmp_name']);
			$sha1 = sha1_file($_FILES['file']['tmp_name']);

			$img_data = [
				'type' => 'receiver_document',
				'uuid' => $uuid,
				'md5' => $md5,
				'sha1' => $sha1,
				'file' => new CurlFile($_FILES['file']['tmp_name'], $_FILES['file']['type'], $_FILES['file']['name'])
			];
	
			try {
				$upload = $this->nx_client->create('File', $img_data);
	
				$receiver_document = $upload['uuid'];
	
				$this->nx_client->update('Contract', $contract['id'], ['receiver_document' => $receiver_document]);
	
				// $log_datas = [
				// 	'user_id' => $ask_contract['user'][0]['id'],
				// 	'action' => 'Votre document a été signé par le destinataire.',
				// 	'link' => $contract['uuid']
				// ];
	
				// $this->nx_client->create('Log', $log_datas);
				$ok_file = true;
				// redirect(site_url('sign/' . $contract_uuid . '?token=' . $_POST['mega_token']));
			} catch (Exception $e) {
				echo 'Impossible d\'envoyer le document, merci de contacter votre administrateur.';
				die();
			}
	
			?>
			<?php
			die();
		}
		


		var_dump($all_contracts);
		die();
	}
	*/

	public function getPaymentInfos()
	{

		\Stripe\Stripe::setApiKey(STRIPE_SK_KEY);

		// $purchases = $this->nx_client->getList('UserPurchase', ['filter' => ['id,in,722,820,588,292,110,510,180,81,283,238,718,379,437,101,13,675,545,711,127,667,580,786,210,680,395,254,276,482,654,378,280,277,144,114,133,405,449,234,739,421,808,347,70,630,47,825,582,537,51,518,120,780,688,344,624,448,495,221,723,82,271,824,147,375,69,746,613,684,648,578,142,317,607,643,541,184,486,605,287,249,717,743,112,599,54,740,9,183,291,232,669,250,303,579,612,609,796,803,60,80,488,732,118,115,822,622,710,396,302,296,727,559,754,532,165,520,661,294,524,560,220,87,206,689,370,236,321,539,38,233,187,91,136,22,226,701,494,97,300,573,553,496,84,530,90,318,62,336,591,490,465,735,168,12,376,404,309,641,19,728,444,239,143,709,105,260,567,587,139,548,78,174,653,181,716,373,502,57,353,190,230,806,125,514,831,140,325,733,355,61,657,594,17,66,259,700,450,301,293,44,31,179,538,652,569,99,600,673,606,672,389,14,479,45,477,20,468']]);

		// // var_dump($purchases);
		// // die();

		// foreach ($purchases AS $p){
		$session = \Stripe\Checkout\Session::retrieve('cs_live_a1veKw0M0xHlOhiIc8rXprle4GOhpIDnt6XVpQI6bWz3wgEX02av5bnmeE');
		$t_id = $session->payment_intent;
		// $up_id = $p['id'];

		// var_dump($session);
		// die();

		$this->nx_client->update('UserPurchase', 831, ['transaction_id' => $t_id]);
		// }


		echo 'ok';


		// var_dump($session);
	}
}
