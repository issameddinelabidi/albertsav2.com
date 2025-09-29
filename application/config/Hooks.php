<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Hooks extends CI_Controller
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
            $this->nx_client = new NxClient([WS_URL, null, null, null]);
        }

        $this->data['config'] = $this->nx_client->getOne('Configuration', 1, []);
    }

    public function index()
    {

        // $this->data = [];
        // $this->data['articles'] = $this->nx_client->getList('Article');
        // var_dump($this->data);
        redirect(site_url());
        die();
    }
    public function beds24Hook()
    {
        //Handle header
        if (empty($_SERVER['HTTP_ALBERT_APP_HEADER'])) {
            throw new Exception("Bad security token", 40003);
        }

        $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic ' . ADMIN_BASIC]]);

        $header_to_check = $_SERVER['HTTP_ALBERT_APP_HEADER'];

        $find_user = $this->nx_client->getList('User', ['filter' => ['personal_header,eq,' . $header_to_check]]);


        if (empty($find_user)) {
            throw new Exception("No user found with beds24 token sent", 40004);
        }

        $params = json_encode($_GET);

        $data = [
            'booking_id' => $_GET['bookid'],
            'user_unique_id' => $find_user[0]['unique_id'],
            'type' => $_GET['status'],
            'params' => $params
        ];

        $this->nx_client->create('Event', $data);
    }
}
