<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
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

        $this->data['page_type'] = 'about';
        $this->data['page_title'] = ALBERT_A_PROPOS;

        $this->load->view('head', $this->data);
        $this->load->view('about');
        $this->load->view('foot');
    }

    public function demo()
    {

        $this->data['page_type'] = 'demo';
        $this->data['page_title'] = ALBERT_UNE_DEMO_INTERACTIVE;

        $this->load->view('head', $this->data);
        $this->load->view('demo');
        $this->load->view('foot');
    }

    public function leave()
    {

        $this->data['page_type'] = 'demo';
        $this->data['page_title'] = ALBERT_VOUS_NOUS_QUITTEZ;

        $this->load->view('head', $this->data);
        $this->load->view('pages/leave');
        $this->load->view('foot');
    }

    public function ccm()
    {

        $this->data['page_type'] = 'leave';
        $this->data['page_title'] = 'Comment ça marche ?';

        $this->load->view('head', $this->data);
        $this->load->view('ccm');
        $this->load->view('foot');
    }


    public function affiliation()
    {

        $this->data['page_type'] = 'affi';
        $this->data['page_title'] = ALBERT_PROGRAMME_DAFFILIATION;

        $this->load->view('head', $this->data);
        $this->load->view('affiliation');
        $this->load->view('foot');
    }
}
