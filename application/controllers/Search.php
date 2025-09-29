<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
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

        $this->data['is_dash'] = 'dashboard';
    }

    public function index()
    {
        $word = trim($_GET['search']);

        if (strlen($_GET['search']) < 2) {
            $notif = [
                'text' => 'Merci de saisir une recherche supérieure à 2 caractères',
                'type' => 'error'
            ];

            $this->session->set_flashdata('notif', $notif);
            redirect(site_url('dashboard'));
        }

        switch ($_GET['type']) {
            case 'annonce':
            case 'user':
            case 'reference':
                $type = $_GET['type'];
                break;

            default:
                $notif = [
                    'text' => 'Merci de saisir une recherche valide.',
                    'type' => 'error'
                ];

                $this->session->set_flashdata('notif', $notif);
                redirect(site_url('dashboard'));
                break;
        }

        $search_datas = [
            'type' => $type,
            'search' => addslashes(trim($_GET['search']))
        ];

        $this->data['search_results'] = $this->nx_client->patch('User', $this->data['user']['id'], 'search', $search_datas);


        if ($this->data['user']['access_level'] > 10) {
            $user_filter = '';
        } else {
            $user_filter = 'user_unique_id,eq,' . $this->data['user']['unique_id'];
        }


        $this->data['page_type'] = 'search_results';
        $this->data['page_title'] = 'Résultats';

        $this->load->view('head', $this->data);
        $this->load->view('search/main');
        $this->load->view('foot');
    }
}
