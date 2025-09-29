<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Marketplace extends CI_Controller
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

        if (!empty($this->data['user'])) {
            $this->data['home_link'] = site_url('dashboard');
        } else {
            $this->data['home_link'] = site_url();
        }

        // $this->data['is_dash'] = 'dashboard';
    }

    public function index()
    {

        $this->data['products_list'] = $this->nx_client->getList('Product', ['filter' => ['is_for,eq,' . LANG], 'order' => 'id desc']);

        $this->data['page_type'] = 'marketplace';
        $this->data['page_title'] = 'Marketplace';

        $this->load->view('head', $this->data);
        $this->load->view('marketplace/main');
        $this->load->view('foot');
    }
}
