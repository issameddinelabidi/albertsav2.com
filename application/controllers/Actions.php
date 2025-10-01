<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Actions extends CI_Controller
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

        echo view('head');
        echo view('home');
        echo view('foot');
    }

    public function login()
    {
        $username = $this->input->post('email');
        $password = $this->input->post('password');

        $this->form_validation->set_rules('email', 'Email', 'required|trim');
        $this->form_validation->set_rules('password', 'Mot de passe', 'required|trim');

        if (empty($this->form_validation->run())) {
            redirect(site_url('connexion'));
        } else {
            try {
                $this->nx_client = new NxClient([WS_URL, null, null, ["Authorization: Basic " . base64_encode($username . ':' . $password)]]);

                $me = $this->nx_client->getOne('me', '', []);

                $this->session->set_tempdata('basic', base64_encode($username . ':' . $password), (60 * 60 * 24 * 365));

                redirect(site_url('dashboard'));
            } catch (Exception $e) {

                switch ($e->getCode()) {
                    case 1024:
                        $message = 'Identifiant ou mot de passe non trouvé.';
                        break;
                    default:
                        $message = $e->getMessage();
                        break;
                }

                $notif = [
                    'text' => $message,
                    'type' => 'error'
                ];

                $this->session->set_flashdata('notif', $notif);

                redirect(site_url('connexion'));
            }
        }
    }

    public function register()
    {
        if (empty($_POST['g-recaptcha-response'])) {

            $notif = [
                'text' => ALBERT_MERCI_DE_COCHER_LA_CASE_JE_SUIS_UN_HUMAIN,
                'type' => 'error'
            ];

            redirect(site_url('inscription'));
        } else {
            $params = [
                'secret' => '6Leh200jAAAAAA1K5RO7y6MUoNVesbrirMc7vvM4',
                'response' => $_POST['g-recaptcha-response']
            ];
            $curl = curl_init('https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($curl, CURLOPT_HEADER, 1);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'POST');

            curl_setopt($curl, CURLOPT_POSTFIELDS, $params);

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $resp = curl_exec($curl);

            $resp = trim(str_replace("HTTP/1.1 100 Continue", "", $resp));

            list($headers, $content) = preg_split("/\n\s*?\n/m", $resp, 2);

            $response = json_decode(trim($content), true);

            if (empty($response['success'])) {
                redirect(site_url('inscription'));
            }
        }

        $data = [
            'email' => trim($_POST['email']),
            'password' => trim($_POST['password']),
            'username' => trim($_POST['username']),
            'max_annonces' => max(3, $_POST['max_annonces']) ?? 10
        ];

        switch ($_SERVER['HTTP_HOST']) {
            case 'albertsav.africa.com':
                $data['registration_platform'] = 'ma';
                $data['platforms_to_deal_with'] = 'ma';
                break;

            default:
                $data['registration_platform'] = 'fr';
                $data['platforms_to_deal_with'] = 'fr';
                break;
        }


        if (!empty($_COOKIE['affiliation'])) {
            $data['father'] = $_COOKIE['affiliation'];
        }

        try {
            $action = $this->nx_client->create('User', $data);

            $this->session->set_tempdata('basic', base64_encode($data['email'] . ':' . $data['password']), (60 * 60 * 24 * 365));

            $notif = [
                'text' => ALBERT_BIENVENUE_SUR_ALBERT,
                'type' => 'success'
            ];

            $this->session->set_flashdata('notif', $notif);

            redirect(site_url('dashboard'));
        } catch (Exception $e) {

            $notif = [
                'text' => $e->getMessage(),
                'type' => 'error'
            ];

            $this->session->set_flashdata('notif', $notif);
            redirect(site_url('inscription'));
        }
    }

    public function passwordForgot()
    {
        if (empty($this->input->post('email'))) {
            $message = ALBERT_MERCI_DE_SAISIR_UNE_ADRESSE_EMAIL_VALIDE_2;
            $type = 'error';
        } else {
            $data = [
                'email' => $this->input->post('email'),
                'type' => 'recoverPassword'
            ];

            try {
                $action = $this->nx_client->create('UserRequest', $data);

                if ($action['value']) {
                    $message = ALBERT_UN_EMAIL_CONCERNANT_LES_INSTRUCTIONS_VOUS_A_ETE_EN_2;
                    $type = 'success';
                } else {
                    $message = 'Une erreur est survenue.';
                    $type = 'error';
                }
            } catch (Exception $e) {
                switch ($e->getCode()) {
                    case 3007:
                        $message = 'Utilisateur non trouvé.';
                        $type = 'error';
                        break;
                    default:
                        $message = 'Erreur lors de la récupération du profil.';
                        $type = 'error';
                        break;
                }
            }
        }

        $notif = [
            'text' => $message,
            'type' => $type
        ];

        $this->session->set_flashdata('notif', $notif);

        if ($type == 'error') {
            redirect(site_url('mot-de-passe-oublie'));
        } else {
            redirect(site_url('connexion'));
        }
    }

    public function recover()
    {
        $post = $this->input->post();

        if ($_POST['password'] != $_POST['password_conf']) {
            $notif = [
                'text' => 'Les mots de passes ne correspondent pas.',
                'type' => 'error'
            ];

            $this->session->set_flashdata('notif', $notif);

            redirect(site_url('connexion?recoverPassword=' . $_POST['token']));
        }

        $token = JWT::decode($post['token'], JWT_KEY);

        $datas = [
            'password' => $post['password'],
            'key' => 'XMN(g~jcH56q>em'
        ];

        try {
            $this->nx_client->patch('User', $token->user_id, 'changePassword', $datas);

            $message = 'Votre mot de passe a bien été mis à jour.';
            $type = 'success';
        } catch (Exception $e) {

            var_dump($e);
            die();
            switch ($e->getCode()) {
                case 3007:
                    $message = 'Utilisateur non trouvé.';
                    $type = 'error';
                    break;
                default:
                    $message = 'Une erreur est survenue lors de la modification du mot de passe.';
                    $type = 'error';
                    break;
            }
        }

        $notif = [
            'text' => $message,
            'type' => $type
        ];

        $this->session->set_flashdata('notif', $notif);

        if ($type == 'error') {
            redirect(site_url('connexion?recoverPassword=' . $_POST['token']));
        } else {
            redirect(site_url('connexion'));
        }
    }

    public function logout()
    {
        session_destroy();
        redirect(site_url());
    }


    //Open Stripe subscription checkout
    public function checkout()
    {

        \Stripe\Stripe::setApiKey(STRIPE_SK);

        header('Content-Type: application/json');

        $_POST['nb_annonces'] = (empty($_POST['nb_annonces'])) ? 3 : $_POST['nb_annonces'];

        //First price => Test Mode
        //Second price => Live Mode
        switch ($_POST['subscribe']) {
            //Guide
            // case 'price_1NeN9GJdLRveMDLtRWJaazAk': //Test
            case 'price_1NeN7JJdLRveMDLtr4AKfLL0': //Prod
                $plan_id = 1;
                break;
            //Chat
            // case 'price_1NeN8AJdLRveMDLtoyJ3ypPa': //Test
            case 'price_1NeN6cJdLRveMDLtRATqMhYy': //Prod
                $plan_id = 2;
                break;

            //Premium
            // case 'price_1NeN7nJdLRveMDLttc59USXI': //Test
            case 'price_1NPQMOJdLRveMDLtU0TLleER': //Prod
                $plan_id = 3;
                break;

            case 'price_1QCISdJdLRveMDLtLtXMq3RB': //Prod MAROC
                $plan_id = 7;
                break;

            default:
                redirect(site_url('nos-offres'));
                break;
        }

        $session_stripe = [
            'line_items' => [[
                'price' => $_POST['subscribe'],
                'quantity' => max(3, (int) $_POST['nb_annonces']),
            ]],
            'metadata' => [
                'nb_annonces' => max(3, (int) $_POST['nb_annonces']),
                'bought_plan' => $plan_id
            ],
            'mode' => 'subscription',
            'allow_promotion_codes' => true,
            'success_url' => site_url('/success?session_id={CHECKOUT_SESSION_ID}'),
            'cancel_url' => site_url('/cancel'),
            'subscription_data' => [
                'trial_period_days' => 7
            ],
            'phone_number_collection' => [
                'enabled' => true,
            ],
            'billing_address_collection' => 'required'
        ];

        if (!empty($this->data['user']['id'])) {
            $session_stripe['metadata']['user_id'] = $this->data['user']['id'];
            $session_stripe['customer_email'] = $this->data['user']['email'];
        }

        if ($plan_id == 1) {
            unset($session_stripe['subscription_data']);
        }


        try {
            $checkout_session = \Stripe\Checkout\Session::create($session_stripe);

            header("Location: " . $checkout_session->url);
        } catch (Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    //Open Stripe subscription Portal
    public function portal()
    {

        $this->data['page_type'] = 'waiting';
        $this->data['page_title'] = 'On vous prépare du neuf';


        $this->load->view('head', $this->data);
        $this->load->view('waiting_page');
        $this->load->view('foot');
        /*


        if (!empty($this->data['user']['is_from_first_stripe_account'])) {
            \Stripe\Stripe::setApiKey(getenv('STRIPE_SK_FIRST_ACCOUNT'));
        } else {
            \Stripe\Stripe::setApiKey(STRIPE_SK);
        }

        if (empty($this->data['user']) || empty($this->data['user']['stripe_id'])) {
            redirect(site_url('connexion'));
        }

        header('Content-Type: application/json');

        // $config = \Stripe\BillingPortal\Configuration::create(
        //     [
        //         'features' => [
        //             'invoice_history' => [
        //                 'enabled' => true
        //             ],
        //             'customer_update' => [
        //                 'enabled' => true,
        //                 'allowed_updates' => ['name', 'email']
        //             ],
        //             'subscription_update' => [
        //                 'default_allowed_updates' => [],
        //                 'enabled' => true,
        //                 'products' => [
        //                     'prices' => ['price_1NeN7nJdLRveMDLttc59USXI'],
        //                     'product' => 'prod_ORFdYffZzm63Rz'

        //                 ]
        //             ]
        //         ],
        //         'business_profile' => [
        //             'headline' => 'ALB',
        //             'privacy_policy_url' => 'https://albertsav.com/PRIV',
        //             'terms_of_service_url' => 'https://albertsav.com/TOS',
        //         ],
        //     ]
        // );

        // $config = \Stripe\BillingPortal\Configuration::create([
        //     'business_profile' => [
        //         'headline' => 'Gestion de votre abonnement Albert',
        //         'privacy_policy_url' => 'https://albertsav.com/conditions-generales-de-vente',
        //         'terms_of_service_url' => 'https://albertsav.com/politique-de-confidentialite',
        //     ],
        //     'default_return_url' => site_url('account'),
        //     'features' => [
        //         'customer_update' => [
        //             'enabled' => true,
        //             'allowed_updates' => ['email', 'address', 'shipping', 'phone', 'tax_id'],
        //         ],
        //         'invoice_history' => [
        //             'enabled' => true,
        //         ],
        //         'payment_method_update' => [
        //             'enabled' => true,
        //         ],
        //         'subscription_cancel' => [
        //             'enabled' => true,
        //             'cancellation_reason' => [
        //                 'enabled' => true,
        //                 'options' => ['too_expensive', 'missing_features', 'switched_service', 'unused', 'customer_service', 'too_complex', 'low_quality', 'other'],
        //             ],
        //             'mode' => 'at_period_end',
        //             'proration_behavior' => 'none',
        //         ],
        //         // 'subscription_pause' => [
        //         //     'enabled' => false,
        //         // ],
        //         'subscription_update' => [
        //             'enabled' => true,
        //             'default_allowed_updates' => ['price', 'quantity'],
        //             // 'proration_behavior' => 'none',
        //             'products' => [
        //                 [
        //                     'product' => BASE_PROD_IDS[0],
        //                     'prices' => [PRICES_LIST[0]]
        //                 ],
        //                 [
        //                     'product' => BASE_PROD_IDS[1],
        //                     'prices' => [PRICES_LIST[1]]
        //                 ],
        //                 [
        //                     'product' => BASE_PROD_IDS[2],
        //                     'prices' => [PRICES_LIST[2]]
        //                 ],
        //                 [
        //                     'product' => BASE_PROD_IDS[3],
        //                     'prices' => [PRICES_LIST[3]]
        //                 ],
        //                 [
        //                     'product' => BASE_PROD_IDS[4],
        //                     'prices' => [PRICES_LIST[4]]
        //                 ],
        //             ],
        //         ],
        //     ],
        //     // 'metadata' => [
        //     //     'foo' => 'bar',
        //     // ],
        // ]);

        try {
            $session = \Stripe\BillingPortal\Session::create([
                'customer' => $this->data['user']['stripe_id'],
                'return_url' => site_url(),
                // 'configuration' => $config

            ]);

            header("Location: " . $session->url);
        } catch (Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
*/
    }

    public function sendContactForm()
    {
        $datas = $this->input->post();

        $datas['ip_address'] = $_SERVER['REMOTE_ADDR'];

        $datas = JWT::encode($datas, JWT_KEY);

        if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message'])) {
            $notif = [
                'text' => 'Merci de remplir correctement le formulaire',
                'type' => 'error'
            ];
        } else {

            try {
                $this->nx_client->patch('Configuration', 1, 'contact', ['token' => $datas, 'type' => 'contact']);

                $notif = [
                    'text' => 'Nous avons bien reçu votre message et vous répondrons dans les plus brefs délais.',
                    'type' => 'success'
                ];
            } catch (Exception $e) {
                $notif = [
                    'text' => 'Impossible d\'envoyer votre message.',
                    'type' => 'error'
                ];
            }
        }

        $this->session->set_flashdata('notif', $notif);

        redirect(site_url());
    }

    public function beds24Cron()
    {
        ini_set('max_execution_time', 1800);

        echo '<p>Début a ' . date('Y-m-d H:i:s') . '</p>';

        $current_hour = (int) date('H');

        // if ($current_hour > 0 && $current_hour < 6) {
        //     die('Script off');
        // }

        if (empty($_GET['user_id'])) {
            echo 'user_id missing';
        } else {

            if (!empty($_GET['key']) && $_GET['key'] == 'mJ99VovE') {
                // die('On est bons');
                $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);

                $users_list = $this->nx_client->getList('User', ['fields' => 'id,username,channel_api,channel_manager_used,deleted', 'filter' => ['id,eq,' . $_GET['user_id'], 'channel_api,nnull', 'channel_manager_used,eq,1', 'deleted,eq,0']]);

                if (!empty($users_list)) {
                    foreach ($users_list as $u) {
                        $token = ['token' => '9sLs|Ijw+yxs9}kn'];

                        try {
                            echo '<blockquote>';
                            echo '<p>START : ' . $u['id'] . ' • ' . $u['username'] . '</p>';
                            $call = $this->nx_client->patch('User', $u['id'], 'beds24Cron', $token);
                            echo '<p>END : ' . $u['id'] . ' • ' . $u['username'] . '</p>';
                            echo '<pre>';
                            var_dump($call);
                            echo '</pre>';
                            echo '</blockquote>';
                        } catch (Exception $e) {
                            var_dump($e);
                            die();
                        }
                    }
                }
            } else {
                echo 'plouf';
            }
        }

        echo '<p>Fin a ' . date('Y-m-d H:i:s') . '</p>';
    }

    public function revelationCron()
    {
        ini_set('max_execution_time', 1800);

        if (!empty($_GET['key']) && $_GET['key'] == 'mJ99VovE') {
            // die('On est bons');
            $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);

            try {
                $call = $this->nx_client->patch('User', 1, 'sendPromMessage');
            } catch (Exception $e) {
            }

            echo 'ok';
        } else {
            echo 'ko';
        }
    }

    /*
    public function shCron()
    {
        ini_set('max_execution_time', 900);

        echo '<p>Début a ' . date('Y-m-d H:i:s') . '</p>';

        if (!empty($_GET['key']) && $_GET['key'] == 'mJ99VovE') {
            // die('On est bons');

            $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);

            // $users_list = $this->nx_client->getList('User', ['fields' => 'id,username,channel_api,channel_manager_used,deleted', 'filter' => ['channel_manager_used,eq,2', 'deleted,eq,0'], 'order' => 'id asc']);

            // if (!empty($users_list)) {
            //     foreach ($users_list as $u) {
            $token = ['token' => '9sLs|Ijw+yxs9}kn'];


            try {
                echo '<blockquote>';
                echo '<p>START</p>';
                $call = $this->nx_client->patch('User', 1, 'superhote', $token);
                echo '<p>END</p>';
                echo '<pre>';
                var_dump($call);
                echo '</pre>';
                echo '</blockquote>';
            } catch (Exception $e) {
                var_dump($e);
                die();
            }
            //     }
            // }
        } else {
            echo 'plouf';
        }

        echo '<p>Fin a ' . date('Y-m-d H:i:s') . '</p>';
    }
*/

    public function shBearerCron()
    {
        ini_set('max_execution_time', 1800);

        echo '<p>Début a ' . date('Y-m-d H:i:s') . '</p>';

        if (!empty($_GET['key']) && $_GET['key'] == 'mJ99VovE') {

            $api_url = 'https://albert.superhote.com/token';

            //Superhote Connexion
            $curl = curl_init($api_url);
            curl_setopt($curl, CURLOPT_HEADER, 1);
            curl_setopt($curl, CURLOPT_HTTPHEADER, ['Authorization:' . SH_AUTH]);
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'GET');

            if (!empty($params)) {
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
            }

            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $resp = curl_exec($curl);

            $resp = trim(str_replace("HTTP/1.1 100 Continue", "", $resp));

            list($headers, $content) = preg_split("/\n\s*?\n/m", $resp, 2);

            $get_token = json_decode(trim($content), true);

            // var_dump($get_token);

            if (!empty($get_token['token'])) {
                $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);
            } else {
                $get_token['token'] = 'ko';
            }

            $this->nx_client->update('Configuration', 1, ['sh_bearer' => $get_token['token']]);
        } else {
            echo 'plouf';
        }

        echo '<p>Fin a ' . date('Y-m-d H:i:s') . '</p>';
    }


    public function updateCleaningGuide()
    {
        ini_set('max_execution_time', 1800);

        echo '<p>Début a ' . date('Y-m-d H:i:s') . '</p>';

        if (!empty($_GET['key']) && $_GET['key'] == 'mJ99VovE') {
            $all_annonces = $this->nx_client->getList('Annonce', ['filter' => ['guide_mode,eq,clean']]);

            if (!empty($all_annonces)) {
                foreach ($all_annonces as $a) {
                    $this->nx_client->update('Annonce', $a['id'], ['guide_state' => 'check-out-done']);
                }
            }
        } else {
            echo 'plouf';
        }

        echo '<p>Fin a ' . date('Y-m-d H:i:s') . '</p>';
    }

    public function resetGuide()
    {
        ini_set('max_execution_time', 1800);

        // echo '<p>Début a ' . date('Y-m-d H:i:s') . '</p>';

        //Voyageurs seulement
        if (!empty($_GET['key']) && $_GET['key'] == 'mJ99VovE') {
            $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);

            $all_annonces = $this->nx_client->getList('Annonce', ['fields' => 'id,guide_mode,deleted,title', 'filter' => ['guide_mode,eq,inout']]);


            if (!empty($all_annonces)) {
                $counter = 0;
                foreach ($all_annonces as $a) {
                    $this->nx_client->update('Annonce', $a['id'], ['guide_state' => 'cleaning-done']);
                    $counter++;
                }
            }
            // echo 'ok pour ' . $counter;
        } else {
            echo 'plouf';
        }

        // echo '<p>Fin a ' . date('Y-m-d H:i:s') . '</p>';
    }

    public function chatBaseApiCall()
    {
        $reference = $this->uri->segment(2);

        $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);
        $annonce = $this->nx_client->patch('User', 1, 'chatbaseAnnonces', ['unique_reference' => $reference]);

        if (!empty($_GET['format']) && $_GET['format'] == 'json') {
            echo json_encode($annonce, JSON_PRETTY_PRINT);
        } else {

?>
            <!DOCTYPE html>
            <html lang="fr">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>Reference : <?= $annonce['unique_reference']; ?></title>
            </head>

            <body>


                <?php
                echo '<table>';

                foreach ($annonce as $k => $v) {
                    // $k = str_replace('_', ' ', $k);
                    if (!is_array($v)) {
                        echo '<tr><td>' . $k . ' : ' . $v . '&nbsp;</td></tr>';
                    } else {
                        $item = [];
                        foreach ($v as $value) {
                            array_push($item, $value['name']);
                        }

                        $final_item = trim(implode(', ', $item));

                        echo '<tr><td>' . $k . ' : ' . $final_item . '&nbsp;</td></tr>';
                    }
                }

                echo '</table>';
                ?>
            </body>

            </html>
        <?php
        }
    }

    public function chatbaseFaq()
    {
        header('Content-Type: application/json; charset=utf-8');

        $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);


        $faq_content = $this->nx_client->getList('FaqQuestion', ['fields' => 'question,answer']);


        echo json_encode($faq_content);
        /*
        if (!empty($_GET['format']) && $_GET['format'] == 'json') {
            echo json_encode($faq_content);
        } else {

        ?>
            <!DOCTYPE html>
            <html lang="fr">

            <head>
                <meta charset="UTF-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <title>FAQ</title>
            </head>

            <body>


                <?php
                echo '<table>';

                foreach ($annonce as $k => $v) {
                    // $k = str_replace('_', ' ', $k);
                    if (!is_array($v)) {
                        echo '<tr><td>' . $k . ' : ' . $v . '&nbsp;</td></tr>';
                    } else {
                        $item = [];
                        foreach ($v as $value) {
                            array_push($item, $value['name']);
                        }

                        $final_item = trim(implode(', ', $item));

                        echo '<tr><td>' . $k . ' : ' . $final_item . '&nbsp;</td></tr>';
                    }
                }

                echo '</table>';
                ?>
            </body>

            </html>
<?php
        }
*/
    }

    public function faqTeam()
    {

        $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);


        $faq_main = $this->nx_client->getList('Faq', ['filter' => ['is_team,eq,1'], 'order' => 'position asc']);

        $this->data['faq_content'] = $this->nx_client->getList('FaqQuestion', ['order' => 'position asc']);
    }

    /*
    public function beds24SyncCron()
    {
        ini_set('max_execution_time', 1800);

?>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>

        <div id="result"></div>
        <?php
        if (!empty($_GET['key']) && $_GET['key'] == 'mJ99VovE') {
            // die('On est bons');
            $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);

            $users_list = $this->nx_client->getList('User', ['fields' => 'id,username,channel_api,channel_manager_used,deleted', 'filter' => ['channel_api,nnull', 'channel_manager_used,eq,1', 'deleted,eq,0']]);

            if (!empty($users_list)) {
                foreach ($users_list as $u) {
                    $token = ['token' => '9sLs|Ijw+yxs9}kn'];

                    $url_to_call = site_url('Actions/beds24Cron/' . $u['id'] . '?key=mJ99VovE');
        ?>
                    <script>
                        $.ajax({
                            method: "POST",
                            url: "<?= $url_to_call; ?>",
                            async: false,
                        }).done(function(response) {
                            $("#result").append("<div>" + response + "</div>");
                        });
                    </script>
<?php
                }
            }
        } else {
            echo 'plouf';
        }
    }
*/


    public function superhote()
    {
        ini_set('max_execution_time', 900);

        // echo '<p>Début a ' . date('Y-m-d H:i:s') . '</p>';
        $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);
        $config = $this->nx_client->getList('Configuration', ['filter' => ['id,eq,1'], 'fields' => 'sh_bearer,sh_cron_in_progress']);

        $cur_timestamp = time();


        if (!empty($config['sh_cron_in_progress'])) {
            APPUP::writeLog('------ Cron déjà en cours : ' . $cur_timestamp);
        } else {

            if (!empty($_GET['key']) && $_GET['key'] == 'mJ99VovE') {
                ini_set('memory_limit', '2048M'); // ou plus, par exemple 512M
                APPUP::writeLog('------ Initialisation du cron Superhote : ' . $cur_timestamp);

                // --- LOCK: on pose le verrou en début puis on garantit sa libération en finally
                $this->nx_client->update('Configuration', 1, ['sh_cron_in_progress' => 1]);
                APPUP::writeLog('------ Passage de l\'état du cron à EN COURS : ' . $cur_timestamp);

                try {
                    // Main settings
                    $bearer_header = 'Authorization:Bearer ' . $config[0]['sh_bearer'];
                    $messages_limit = 100;

                    // Get active annonces
                    $annonces = $this->nx_client->getList('AnnonceShActive');

                    // Return propKey as an integer
                    $annonces = array_map(function ($item) {
                        $item['channel_item_id'] = (int) $item['channel_item_id'];
                        return $item;
                    }, $annonces);

                    $db_rental_ids = array_column($annonces, 'channel_item_id');

                    // FIX: Préparer une map rental_id -> user_unique_id pour lookup O(1)
                    $rentalToUser = [];
                    foreach ($annonces as $a) {
                        $rentalToUser[(int)$a['channel_item_id']] = $a['user_unique_id'];
                    }

                    // FIX: Charger une fois tous les booking_id déjà présents et construire un set
                    $bookingsExisting = $this->nx_client->getList('Booking', ['fields' => 'booking_id']);
                    $bookingsExisting = array_map(function ($item) {
                        $item['booking_id'] = (int)$item['booking_id'];
                        return $item;
                    }, $bookingsExisting);
                    $existingBookingIdsSet = array_fill_keys(array_column($bookingsExisting, 'booking_id'), true);

                    // FIX: Charger une fois tous les message_id déjà présents et construire un set
                    $messagesExisting = $this->nx_client->getList('BookingMessage', ['fields' => 'message_id']);
                    $messagesExisting = array_map(function ($item) {
                        $item['message_id'] = (int)$item['message_id'];
                        return $item;
                    }, $messagesExisting);
                    $existingMessageIdsSet = array_fill_keys(array_column($messagesExisting, 'message_id'), true);

                    // Get messages “globaux” SH
                    $sh_messages = APPUP::shCurl('messagesnew?limit=' . $messages_limit, $bearer_header);

                    if (empty($sh_messages)) {
                        APPUP::writeLog('------ SH messages vides, arrêt propre.');
                        return false; // finally libérera le lock
                    }
                    if ($sh_messages === 'Token has expired') {
                        APPUP::writeLog('------ SH token expiré, arrêt propre.');
                        return false; // finally libérera le lock
                    }

                    $sh_rental_ids = array_column($sh_messages['bookings'], 'rental_id');

                    // Garder uniquement les rentals connus
                    $rentals_to_check = array_intersect($db_rental_ids, $sh_rental_ids);

                    // Filtrer les bookings à traiter
                    $bookings_to_check = array_filter($sh_messages['bookings'], function ($item) use ($rentals_to_check) {
                        return in_array($item['rental_id'], $rentals_to_check);
                    });

                    foreach ($bookings_to_check as $booking) {
                        $bookingId = (int)$booking['booking_id'];
                        $rentalId  = (int)$booking['rental_id'];

                        // --- Création Booking si absent (déduplication via set en mémoire)
                        if (!isset($existingBookingIdsSet[$bookingId])) {
                            if (isset($rentalToUser[$rentalId])) {
                                $user_unique_id = $rentalToUser[$rentalId];

                                $booking_datas = [
                                    'user_unique_id'     => $user_unique_id,
                                    'channel_id'         => 2,
                                    'property_id'        => $rentalId,
                                    'booking_id'         => $bookingId,
                                    // NOTE: on garde exactement les mêmes champs (pas de changement de requêtes)
                                    'booking_start_date' => $booking['checking'], // si c'est 'checkin' côté API, laisse tel quel pour ne pas changer la logique existante
                                    'booking_end_date'   => $booking['checkout'],
                                    'first_name'         => $booking['guest_first_name'],
                                    'last_name'          => $booking['guest_last_name'],
                                    'phone'              => $booking['guest_phone'],
                                    'platform'           => $booking['channel_name']
                                ];

                                try {
                                    $this->nx_client->create('Booking', $booking_datas);
                                    // FIX: marquer comme existant pour éviter recréation dans le même run
                                    $existingBookingIdsSet[$bookingId] = true;
                                } catch (Exception $e) {
                                    APPUP::writeLog('!! Echec création Booking booking_id=' . $bookingId . ' : ' . $e->getMessage());
                                }
                            } else {
                                APPUP::writeLog('!! Aucun user_unique_id pour rental_id=' . $rentalId . ' (annonce absente/map non trouvée).');
                            }
                        }

                        // --- Récupération & création des messages du booking (déduplication via set)
                        APPUP::writeLog('-- CRON ID : ' . $cur_timestamp . ' Tentative de récupération des messages du booking_id:' . $bookingId);
                        $booking_messages = APPUP::shCurl('bookings/' . $bookingId . '/messages', $bearer_header);
                        APPUP::writeLog('-- CRON ID : ' . $cur_timestamp . ' Récupération des messages effectuée sur booking_id:' . $bookingId);

                        $unprocess_booking = false;

                        if (!empty($booking_messages) && is_array($booking_messages)) {
                            APPUP::writeLog('-- CRON ID : ' . $cur_timestamp . ' Démarrage de la boucle sur les messages récupérés');

                            foreach ($booking_messages as $mess) {
                                $messageId = (int)$mess['message_id'];

                                // FIX: déduplication stricte avant insert
                                if (isset($existingMessageIdsSet[$messageId])) {
                                    continue; // déjà en base, on skip
                                }

                                $params = [
                                    'booking_id'  => $bookingId,
                                    'message_id'  => $messageId,
                                    'message'     => $mess['message'],
                                    'message_date' => $mess['created_at'],
                                ];

                                if ($mess['from'] == 'user') {
                                    $params['author'] = 'host';
                                    $params['is_read'] = 1;
                                } else {
                                    $params['author'] = 'guest';
                                    $params['is_read'] = 0;
                                    $unprocess_booking = true;
                                }

                                try {
                                    APPUP::writeLog('---- CRON ID : ' . $cur_timestamp . ' Écriture BookingMessage message_id:' . $messageId . ' | booking_id:' . $bookingId);
                                    $this->nx_client->create('BookingMessage', $params);
                                    // FIX: marquer comme existant pour éviter doublons intra-run
                                    $existingMessageIdsSet[$messageId] = true;
                                } catch (Exception $e) {
                                    APPUP::writeLog('!! Echec création BookingMessage message_id=' . $messageId . ' : ' . $e->getMessage());
                                }
                            }
                        }

                        // NOTE: on garde ton bloc de recalcul is_processed commenté pour ne pas changer la logique métier/queries
                        /*
        if (!empty($unprocess_booking)) {
            // $find_booking = $this->nx_client->getList('Booking', ['fields' => 'id,booking_id,is_processed', 'filter' => ['booking_id,eq,' . $bookingId, 'is_processed,eq,1']]);
            // if (!empty($find_booking)) {
            //     $id_to_update = $find_booking[0]['id'];
            //     $this->nx_client->update('Booking', $id_to_update, ['is_processed' => 0]);
            // }
        }
        */
                    }

                    return true; // exécution OK

                } catch (Throwable $e) {
                    // FIX: journaliser l'erreur fatale mais laissons le finally libérer le lock
                    APPUP::writeLog('!! Erreur fatale cron SH : ' . $e->getMessage());
                    return false;
                } finally {
                    // --- UNLOCK systématique
                    APPUP::writeLog('------ on va passer l\'état du cron à TERMINE : ' . $cur_timestamp);
                    try {
                        $this->nx_client->update('Configuration', 1, ['sh_cron_in_progress' => 0]);
                        APPUP::writeLog('------ Passage de l\'état du cron à TERMINE EFFECTUE : ' . $cur_timestamp);
                    } catch (Exception $e) {
                        APPUP::writeLog('!! Echec de libération du lock : ' . $e->getMessage());
                    }
                }



                /*
                ini_set('memory_limit', '2048M'); // ou plus, par exemple 512M
                APPUP::writeLog('------ Initialisation du cron Superhote : ' . $cur_timestamp);

                APPUP::writeLog('------ on va passer l\'état du cron à EN COURS : ' . $cur_timestamp);
                $this->nx_client->update('Configuration', 1, ['sh_cron_in_progress' => 1]);
                APPUP::writeLog('------ Passage de l\'état du cron à EN COURS : ' . $cur_timestamp);

                //Main settings
                $bearer_header = 'Authorization:Bearer ' . $config[0]['sh_bearer'];
                $messages_limit = 100;

                //Get active annonces to deal only with annonces correctly set, user with active subscription
                $annonces = $this->nx_client->getList('AnnonceShActive');

                //Return propKey as an integer
                $annonces = array_map(function ($item) {
                    $item['channel_item_id'] = (int) $item['channel_item_id'];
                    return $item;
                }, $annonces);

                $db_rental_ids = array_column($annonces, 'channel_item_id');

                $sh_messages = APPUP::shCurl('messagesnew?limit=' . $messages_limit, $bearer_header);


                if (empty($sh_messages)) {
                    APPUP::writeLog('------ Pas de message, on unlock le cron : ' . $cur_timestamp);
                    $this->nx_client->update('Configuration', 1, ['sh_cron_in_progress' => 0]);
                    return false;
                } else {
                    if ($sh_messages == 'Token has expired') {
                        APPUP::writeLog('------ Erreur TOKEN SH, on unlock le cron : ' . $cur_timestamp);
                        $this->nx_client->update('Configuration', 1, ['sh_cron_in_progress' => 0]);
                        // throw new Exception("SH B-Token expired", 90004);
                        return false;
                    }

                    $sh_rental_ids = array_column($sh_messages['bookings'], 'rental_id');
                    $sh_bookings_list = array_column($sh_messages['bookings'], 'booking_id');

                    //Keep only rentals set in Albert dashboard
                    $rentals_to_check = array_intersect($db_rental_ids, $sh_rental_ids);


                    $bookings_to_check = array_filter($sh_messages['bookings'], function ($item) use ($rentals_to_check) {
                        return in_array($item['rental_id'], $rentals_to_check);
                    });

                    //Get all bookings in our database
                    $bookings = $this->nx_client->getList('Booking', ['fields' => 'booking_id']);
                    $bookings = array_map(function ($item) {
                        $item['booking_id'] = (int) $item['booking_id'];
                        return $item;
                    }, $bookings);
                    $db_bookings_list = array_column($bookings, 'booking_id');

                    foreach ($bookings_to_check as $booking) {
                        if (in_array($booking['booking_id'], $db_bookings_list)) {
                            //Already have booking in DB
                        } else {

                            $channel_item_id_to_find = $booking['rental_id'];
                            $key = array_search($channel_item_id_to_find, array_column($annonces, 'channel_item_id'));

                            if ($key !== false) {
                                $user_unique_id = $annonces[$key]['user_unique_id'];

                                $booking_datas = [
                                    'user_unique_id' => $user_unique_id,
                                    'channel_id' => 2,
                                    'property_id' => $booking['rental_id'],
                                    'booking_id' => $booking['booking_id'],
                                    'booking_start_date' => $booking['checking'],
                                    'booking_end_date' => $booking['checkout'],
                                    'first_name' => $booking['guest_first_name'],
                                    'last_name' => $booking['guest_last_name'],
                                    'phone' => $booking['guest_phone'],
                                    'platform' => $booking['channel_name']
                                ];

                                try {
                                    $booking_creation = $this->nx_client->create('Booking', $booking_datas);
                                } catch (Exception $e) {
                                }
                            }
                        }


                        //Get all bookings in our database
                        $messages = $this->nx_client->getList('BookingMessage', ['fields' => 'message_id']);
                        $messages = array_map(function ($item) {
                            $item['message_id'] = (int) $item['message_id'];
                            return $item;
                        }, $messages);
                        $db_messages_list = array_column($messages, 'message_id');

                        //Handle messages creation
                        APPUP::writeLog('-- CRON ID : ' . $cur_timestamp . ' Tentative de récupération des messages du booking_id:' . $booking['booking_id']);
                        $booking_messages = APPUP::shCurl('bookings/' . $booking['booking_id'] . '/messages', $bearer_header);
                        APPUP::writeLog('-- CRON ID : ' . $cur_timestamp . ' Récupération des messages effectuée sur booking_id:' . $booking['booking_id']);

                        $unprocess_booking = false;
                        APPUP::writeLog('-- CRON ID : ' . $cur_timestamp . ' Démarrage de la boucle sur les messages récupérés');

                        foreach ($booking_messages as $mess) {
                            $params = [
                                'booking_id' => $booking['booking_id'],
                                'message_id' => $mess['message_id'],
                                'message' => $mess['message'],
                                'message_date' => $mess['created_at'],
                            ];

                            if ($mess['from'] == 'user') {
                                $params['author'] = 'host';
                                $params['is_read'] = 1;
                            } else {
                                $params['author'] = 'guest';
                                $params['is_read'] = 0;
                                $unprocess_booking = true;
                            }

                            try {
                                APPUP::writeLog('---- CRON ID : ' . $cur_timestamp . ' On va écrire dans BookingMessage pour message_id:' . $mess['message_id'] . ' | booking_id:' . $booking['booking_id']);
                                $this->nx_client->create('BookingMessage', $params);
                                APPUP::writeLog('---- CRON ID : ' . $cur_timestamp . ' On a fini d\'écrire dans BookingMessage pour message_id:' . $mess['message_id'] . ' | booking_id:' . $booking['booking_id']);
                                APPUP::writeLog('---- CRON ID : ' . $cur_timestamp . ' On poursuit la boucle');
                            } catch (Exception $e) {
                            }
                        }

                        if (!empty($unprocess_booking)) {
                            // $find_booking = $this->nx_client->getList('Booking', ['fields' => 'id,booking_id,is_processed', 'filter' => ['booking_id,eq,' . $booking['booking_id'], 'is_processed,eq,1']]);

                            // if (!empty($find_booking)) {
                            //     $id_to_update = $find_booking[0]['id'];
                            //     $this->nx_client->update('Booking', $id_to_update, ['is_processed' => 0]);
                            // }
                        }
                    }
                }

                APPUP::writeLog('------ on va passer l\'état du cron à TERMINE : ' . $cur_timestamp);
                $this->nx_client->update('Configuration', 1, ['sh_cron_in_progress' => 0]);
                APPUP::writeLog('------ Passage de l\'état du cron à TERMINE EFFECTUE : ' . $cur_timestamp);
                */
            } else {
                echo 'plouf';
            }
        }

        // echo '<p>Fin a ' . date('Y-m-d H:i:s') . '</p>';
    }

    public function setAnnoncesUpToDate()
    {
        $this->nx_client->create('AnnonceUpToDate', []);

        $notif = [
            'text' => 'Super, nous avons pris en compte l\'information.',
            'type' => 'success'
        ];

        $this->session->set_flashdata('notif', $notif);

        redirect(site_url('dashboard'));
    }

    public function alreadySentReview()
    {

        $data = [
            'user_id' => $this->data['user']['id'],
            'email' => $this->data['user']['email']
        ];
        $this->nx_client->create('ReviewDone', $data);

        $this->nx_client->update('User', $this->data['user']['id'], ['have_left_review' => 'done']);
        $notif = [
            'text' => 'Super, nous avons pris en compte l\'information.',
            'type' => 'success'
        ];

        $this->session->set_flashdata('notif', $notif);

        redirect(site_url('dashboard'));
    }

    public function notInterestedReview()
    {
        $this->nx_client->update('User', $this->data['user']['id'], ['have_left_review' => 'no_interested']);

        $notif = [
            'text' => 'Super, nous avons pris en compte l\'information.',
            'type' => 'success'
        ];

        $this->session->set_flashdata('notif', $notif);

        redirect(site_url('dashboard'));
    }

    public function getStats()
    {
        $me = APPUP::getUserFromBasic($_POST['basic']);

        $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic ' . $_POST['basic']]]);

        $return_state = 'error';

        $annonce_unique_id = $_POST['annonce_unique_id'];
        $get_annonce = $this->nx_client->getList('Annonce', ['fields' => 'id,unique_id', 'filter' => ['unique_id,eq,' . $annonce_unique_id]]);
        if (empty($get_annonce)) {

            $return_state = 'error';
        } else {
            $annonce = $get_annonce[0];

            //Handle period
            $type = $_POST['type'];

            $all_stats = $this->nx_client->patch('Annonce', $annonce['id'], 'getAnnonceStats', ['period' => $type]);

            echo json_encode($all_stats);
        }
    }

    public function addStat()
    {
        $me = APPUP::getUserFromBasic($_POST['basic']);

        $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic ' . $_POST['basic']]]);

        $return_state = 'error';

        $annonce_unique_id = $_POST['annonce_unique_id'];
        $get_annonce = $this->nx_client->getList('Annonce', ['filter' => ['unique_id,eq,' . $annonce_unique_id]]);
        if (empty($get_annonce)) {

            $return_state = 'error';
        } else {
            $annonce = $get_annonce[0];

            try {
                $datas = [
                    'annonce_id' => $annonce['id'],
                    'user_id' => $me['id'],
                    'type' => $_POST['type']
                ];

                $this->nx_client->create('AnnonceStat', $datas);

                $return_state = 'done';
            } catch (Exception $e) {
            }
        }

        echo json_encode(['state' => $return_state]);
    }

    //Open Stripe subscription checkout
    public function checkoutExtra()
    {

        if (empty($this->data['user']['stripe_id']) || empty($this->data['user']['active_subscription'])) {
            redirect(site_url('decouvrez-albert-extra'));
        }

        \Stripe\Stripe::setApiKey(STRIPE_SK);

        header('Content-Type: application/json');

        $session_stripe = [
            'line_items' => [[
                'price' => EXTRA_PRICE_ID,
                'quantity' => 1
            ]],
            'metadata' => [
                'user_unique_id' => $this->data['user']['unique_id'],
                'user_id' => $this->data['user']['id']
            ],
            'mode' => 'subscription',
            'allow_promotion_codes' => true,
            'success_url' => site_url('/success?session_id={CHECKOUT_SESSION_ID}'),
            'cancel_url' => site_url('/cancel'),
            'subscription_data' => [
                'trial_period_days' => 60
            ],
            'phone_number_collection' => [
                'enabled' => true,
            ],
            'billing_address_collection' => 'required',
            'customer' => $this->data['user']['stripe_id']
        ];

        try {
            $checkout_session = \Stripe\Checkout\Session::create($session_stripe);

            header("Location: " . $checkout_session->url);
        } catch (Error $e) {
            http_response_code(500);
            echo json_encode(['error' => $e->getMessage()]);
        }
    }

    public function extraDisclaimer()
    {
        $this->data['page_type'] = 'home';
        $this->data['page_title'] = 'Notice Albert Extra';

        // $this->data['blog_list'] = $this->nx_client->getList('ArticleList', ['filter' => ['is_draft,eq,0'], 'order' => 'id desc', 'limit' => 3]);

        $this->load->view('head', $this->data);
        $this->load->view('extra_disclaimer');
        $this->load->view('foot');
    }

    public function goToExtra()
    {
        if (empty($this->data['user'])) {
            redirect(site_url('connexion'));
        } else {
            $user = $this->data['user'];
        }

        if (empty($user['accept_extra_tos'])) {
            $infos = ['email_to' => $user['email']];
            $token = JWT::encode($infos, JWT_KEY);

            try {
                $this->nx_client->patch('Email', 10, 'send', ['token' => $token]);
            } catch (Exception $e) {
                die('Erreur survenue lors de l\'acceptation des conditions d\'utilisation. Veuillez nous contacter');
            }

            $this->nx_client->update('User', $user['id'], ['accept_extra_tos' => 1]);
        }

        //On check le token
        if (empty($user['token'])) {
            $generate_token = $this->nx_client->patch('User', $user['id'], 'generateUUID');

            try {
                $this->nx_client->update('User', $user['id'], ['token' => $generate_token['value']]);

                $extra_token = $generate_token['value'];
            } catch (Exception $e) {
                die('Une erreur est survenue');
            }
        } else {
            $extra_token = $user['token'];
        }

        $datas = [
            'token' => $extra_token
        ];

        $jwt = JWT::encode($datas, JWT_KEY, 'HS256');


        $url = 'https://extra.albertsav.com/' . $jwt;

        if (!empty($_GET['disable_video'])) {
            $this->nx_client->update('User', $user['id'], ['disable_extra_disclaimer_video' => 1]);
        }

        redirect($url);
    }

    public function handleToken()
    {
        header("Content-Type: application/json");

        $result = [];
        if (empty($_POST['key'])) {
            $result['error'] = 'Missing key';
        }

        if (empty($_POST['token'])) {
            $result['error'] = 'Missing token';
        }

        if ($_POST['key'] != 'nWMU7VUdOYTPp36ZUNo8BtMcFxKx') {
            $result['error'] = 'Invalid key';
        }

        if (empty($result)) {
            $decoded = JWT::decode($_POST['token'], JWT_KEY);

            $user = $this->nx_client->getList('User', ['filter' => ['token,eq,' . $decoded->token]]);

            $result['authorized'] = true;
            $result['user_unique_id'] = $user[0]['unique_id'];
            $result['username'] = $user[0]['username'];
            $result['email'] = $user[0]['email'];
            $result['expiration_date'] = '2050-01-01 23:59:59';
        }

        echo json_encode($result);
    }

    public function exportInvoices()
    {
        // Set your Stripe API key
        \Stripe\Stripe::setApiKey('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');

        // $stripe = new StripeClient(STRIPE_SK);

        $date = 'in_1P1tCqJdLRveMDLtQgYuVxYT';

        // TODO: use "starting_after" or "end_before" to not re-fetch existing invoices
        $invoices = Stripe\Invoice::all(['limit' => 30, 'ending_before' => $date]);

        var_dump($invoices);
        die();

        // Define the directory where you want to save the invoices
        $directory = 'invoices/';

        // Create the directory if it doesn't exist
        if (!file_exists($directory)) {
            mkdir($directory, 0777, true);
        }

        foreach ($invoices->autoPagingIterator() as $invoice) {
            // foreach ($invoices as $invoice) {
            /** @var Invoice $invoice */
            if (!$invoice->invoice_pdf) {
                continue;
            }

            $path = sprintf($directory . '/%s_%s.pdf', date(DATE_ATOM, $invoice->created), $invoice->id);
            if (file_exists($path)) {
                continue;
            }

            echo sprintf("<br>Téléchargement %s..." . PHP_EOL, $invoice->invoice_pdf);
            $fp = fopen($path, 'w');

            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $invoice->invoice_pdf);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_FILE, $fp);

            curl_exec($ch);
            fclose($fp);
        }

        echo "<br>Fait !" . PHP_EOL;
    }

    public function updateStripePhones()
    {
        // Set your Stripe API key
        \Stripe\Stripe::setApiKey(STRIPE_SK);


        $all_users = $this->nx_client->getList('User', ['fields' => 'id,stripe_id', 'filter' => ['stripe_id,nnull']]);
        foreach ($all_users as $user) {
            try {
                $stripe_user = Stripe\Customer::retrieve($user['stripe_id'], []);

                $stripe_phone = $stripe_user->phone;
                if (!empty($stripe_phone)) {
                    $this->nx_client->update('User', $user['id'], ['stripe_phone' => $stripe_phone]);
                }
            } catch (Exception $e) {
            }
        }

        echo 'Mise à jour effectuée';
    }

    // public function testabc()
    // {
    //     $datas = [
    //         'token' => '9f83cf1f-4001-4e3f-95c1-16c9a5147a12-1712078853'
    //     ];

    //     $jwt = JWT::encode($datas, JWT_KEY, 'HS256');

    //     $url = 'https://extra.albertsav.com/' . $jwt;

    //     // redirect($url);
    //     echo $url . '<br>';
    // }

    public function refreshBeds24Tokens()
    {
        ini_set('max_execution_time', '900');

        if (empty($_GET)) {
            die('ok');
        }

        if ($_GET['key'] != 'mJ99VovE') {
            die('ok-2');
        }

        $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);

        $get_users = $this->nx_client->getList('User', ['fields' => 'id,channel_manager_used,deleted,beds24_refresh_token,beds24_auth_token,beds24_auth_token_last_refresh', 'filter' => ['channel_manager_used,eq,1', 'deleted,eq,0', 'beds24_refresh_token,nnull']]);

        if (!empty($get_users)) {
            foreach ($get_users as $usr) {
                $data_to_update = [];
                $user_refresh_token = $usr['beds24_refresh_token'];

                $auth_token = APPUP::getAuthToken($user_refresh_token, 'classic');

                $data_to_update = [
                    'beds24_auth_token' => $auth_token,
                    'beds24_auth_token_last_refresh' => date('Y-m-d H:i:s')
                ];

                $this->nx_client->update('User', $usr['id'], $data_to_update);
            }
        }
    }

    public function ringover()
    {

        // URL de l'API Ringover pour transférer un appel
        $apiUrl = 'https://public-api.ringover.com/v2/calls';

        // Token API Ringover
        $apiToken = '37548efa843898cfd80d2131f6ba78b78486f32d';  // Remplace par ton token API

        // Données pour le transfert d'appel
        $data = [
            'call_id' => 'CALL_ID',  // ID de l'appel que tu veux transférer
            'target'  => '+33970703669',  // Numéro Ringover vers lequel tu transfères l'appel
            'blind'   => true  // true pour un transfert aveugle (direct), false pour un transfert assisté
        ];

        // Initialiser cURL
        $ch = curl_init($apiUrl);

        // Configuration de la requête cURL
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);  // Retourner la réponse dans une variable
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Authorization: $apiToken",  // En-tête d'authentification avec le token
        ]);

        // Exécuter la requête
        $response = curl_exec($ch);

        // Vérifier s'il y a une erreur dans la requête cURL
        if (curl_errno($ch)) {
            echo 'Erreur cURL : ' . curl_error($ch);
        } else {
            // Vérifier le statut HTTP de la réponse
            $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

            if ($httpCode === 200) {
                // Réponse réussie
                $responseData = json_decode($response, true);
                echo 'Réponse API : ' . print_r($responseData, true);
            } else {
                // Erreur lors de l'appel API
                echo 'Erreur HTTP : ' . $httpCode . ' - Réponse API : ' . $response;
            }
        }

        // Fermer la session cURL
        curl_close($ch);
    }

    public function listUsers()
    {
        $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);

        \Stripe\Stripe::setApiKey(STRIPE_SK);

        try {
            $customersInfo = []; // Tableau pour stocker les informations des clients
            $hasMore = true; // Indicateur de pagination
            $startingAfter = null; // Identifiant pour suivre la pagination

            while ($hasMore) {
                // Récupérer les clients
                $customers = \Stripe\Customer::all([
                    'limit' => 100, // Limite par page
                    'starting_after' => $startingAfter, // Suivre la pagination
                ]);

                foreach ($customers->data as $customer) {
                    $customerId = $customer->id;

                    $address = $customer->address ?? [
                        'line1' => '',
                        'line2' => '',
                        'city' => '',
                        'state' => '',
                        'postal_code' => '',
                        'country' => '',
                    ];

                    $subscriptions = \Stripe\Subscription::all([
                        'customer' => $customerId, // Filtrer par ID client
                        'limit' => 100, // Limiter les résultats par page (max 100)
                    ]);

                    // Tableau pour stocker les abonnements au volume
                    $customer_abo['status'] = '';
                    $customer_abo['quantity'] = '';

                    foreach ($subscriptions->data as $subscription) {
                        if ($subscription->quantity > 0) {
                            $customer_abo['status'] = $subscription->current_period_end >= time() ? 'Oui' : 'Non';
                            $customer_abo['quantity'] = $subscription->quantity;
                        }
                    }

                    // Récupérer les informations du client
                    $customerData = [
                        'name' => $customer->name ?? 'N/A',
                        'first_name' => $customer->metadata['first_name'] ?? 'N/A',
                        'last_name' => $customer->metadata['last_name'] ?? 'N/A',
                        'email' => $customer->email ?? 'N/A',
                        'stripe_id' => $customer->id,
                        'phone' => $customer->phone ?? 'N/A',
                        'address' => [
                            'line1' => $address['line1'],
                            'line2' => $address['line2'],
                            'city' => $address['city'],
                            'state' => $address['state'],
                            'postal_code' => $address['postal_code'],
                            'country' => $address['country'],
                        ],
                        'subscription' => $customer_abo
                    ];

                    // Ajouter les informations dans le tableau final
                    $customersInfo[] = $customerData;
                }

                // Vérifier s'il y a d'autres pages à récupérer
                $hasMore = $customers->has_more;
                if ($hasMore) {
                    $startingAfter = end($customers->data)->id; // Dernier ID de la page actuelle
                }
            }

            // Afficher les informations des clients (facultatif)
            // echo "Liste des clients Stripe :\n";
            // var_dump($customersInfo);

            // Vous pouvez maintenant utiliser $customersInfo pour d'autres traitements
        } catch (\Stripe\Exception\ApiErrorException $e) {
            // Gérer les erreurs Stripe
            echo 'Erreur : ' . $e->getMessage();
        }


        foreach ($customersInfo as $cus) {
            if ($cus['subscription']['status'] == 'Oui') {
                $stripe_id = $cus['stripe_id'];
                $quantity = $cus['subscription']['quantity'];

                $get_user = $this->nx_client->getList('User', ['filter' => ['stripe_id,eq,' . $stripe_id]]);
                if (!empty($get_user) && $get_user[0]['max_annonces'] != $quantity) {
                    $the_user = $get_user[0];

                    $this->nx_client->update('User', $the_user['id'], ['max_annonces' => $quantity]);
                }
            }
        }

        die('Fini');

        ?>
        <link rel="stylesheet" href="https://albertsav.com/assets/css/style.css">
        <table class="table text-dark">
            <thead>
                <tr>
                    <td class="fw-bold">Stripe id</td>
                    <td class="fw-bold">Nom</td>
                    <td class="fw-bold">Email</td>
                    <td class="fw-bold">Phone</td>
                    <td class="fw-bold">Adresse</td>
                    <td class="fw-bold">Abonné</td>
                    <td class="fw-bold">Quantité</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($customersInfo as $cus) {
                ?>
                    <tr>
                        <td><?= $cus['stripe_id']; ?></td>
                        <td><?= $cus['name']; ?></td>
                        <td><?= $cus['email']; ?></td>
                        <td><?= $cus['phone']; ?></td>
                        <td>
                            <?= $cus['address']['line1']; ?> <?= $cus['address']['line2']; ?><br>
                            <?= $cus['address']['postal_code']; ?> <?= $cus['address']['city']; ?> <?= $cus['address']['country']; ?>
                        </td>
                        <td>
                            <?= $cus['subscription']['status']; ?>
                        </td>
                        <td>
                            <?= $cus['subscription']['quantity']; ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
<?php
    }

    public function exportUsers()
    {
        // Clé API du compte A (ancien compte Stripe)
        $stripeA = new \Stripe\StripeClient('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');

        $stripeB = new \Stripe\StripeClient(STRIPE_SK);

        ini_set('max_execution_time', 1800);
        ini_set('memory_limit', '1024M'); // ou plus si nécessaire


        // Params CLI
        $offset = isset($_GET['offset']) ? (int) $_GET['offset'] : 0;
        $limitToProcess = isset($_GET['count']) ? (int) $_GET['count'] : 50;

        if ($offset < 0 || $limitToProcess <= 0) {
            exit("❌ Usage: php migrate_batch.php <offset> <count>\n");
        }

        echo "▶️ Migration de $limitToProcess clients à partir du $offset client...\n";

        $customers_map = [];
        $totalFetched = 0;
        $totalProcessed = 0;
        $startingAfter = null;
        $hasMore = true;

        // Boucle jusqu'à atteindre offset + limitToProcess
        while ($hasMore && $totalProcessed < $limitToProcess) {
            $pageLimit = 100; // max Stripe
            $params = ['limit' => $pageLimit];
            if ($startingAfter) {
                $params['starting_after'] = $startingAfter;
            }

            $batch = $stripeA->customers->all($params);
            $hasMore = $batch->has_more;

            foreach ($batch->data as $customerA) {
                $totalFetched++;

                // Sauter jusqu'à l'offset demandé
                if ($totalFetched <= $offset) {
                    $startingAfter = $customerA->id;
                    continue;
                }

                if ($totalProcessed >= $limitToProcess) break;

                try {
                    $metadata = is_array($customerA->metadata) ? array_filter($customerA->metadata, function ($v, $k) {
                        return is_scalar($v) && is_string($k);
                    }, ARRAY_FILTER_USE_BOTH) : [];

                    $newCustomer = $stripeB->customers->create([
                        'email' => $customerA->email,
                        'name' => $customerA->name,
                        'description' => $customerA->description,
                        'metadata' => array_merge($metadata, ['old_customer_id' => $customerA->id]),
                    ]);

                    $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic ' . ADMIN_BASIC]]);

                    $get_user = $this->nx_client->getList('User', ['filter' => ['old_stripe_id,eq,' . $customerA->id]]);

                    if (!empty($get_user[0]['id'])) {
                        $this->nx_client->update('User', $get_user[0]['id'], ['stripe_id' => $newCustomer->id]);

                        $setupSession = $stripeB->checkout->sessions->create([
                            'payment_method_types' => ['card', 'sepa_debit'],
                            'mode' => 'setup',
                            'customer' => $newCustomer->id,
                            'success_url' => site_url('/success?session_id={CHECKOUT_SESSION_ID}'),
                            'cancel_url' => site_url('/cancel'),
                        ]);

                        $customers_map[] = [
                            'old_customer_id' => $customerA->id,
                            'new_customer_id' => $newCustomer->id,
                            'setup_link' => $setupSession->url,
                        ];

                        echo "✅ {$customerA->email} → {$newCustomer->id}\n";
                    }
                } catch (\Exception $e) {
                    $customers_map[] = [
                        'old_customer_id' => $customerA->id,
                        'new_customer_id' => 'ERROR',
                        'setup_link' => $e->getMessage(),
                    ];
                    echo "❌ Erreur pour {$customerA->id} : " . $e->getMessage() . "\n";
                }

                $totalProcessed++;
                $startingAfter = $customerA->id;
            }
        }

        echo "\n🏁 $totalProcessed clients traités à partir du $offsetᵉ.\n";

        // Génération CSV
        $filename = "migration_{$offset}_to_" . ($offset + $totalProcessed - 1) . ".csv";
        $output = fopen($filename, 'w');
        fputcsv($output, ['old_customer_id', 'new_customer_id', 'setup_link']);
        foreach ($customers_map as $row) {
            fputcsv($output, $row);
        }
        fclose($output);

        echo "📄 Fichier exporté : $filename\n";
    }

    public function pauseSubscriptions()
    {
        $stripeNew = new \Stripe\StripeClient(STRIPE_SK);


        $hasMore = true;
        $startingAfter = null;

        while ($hasMore) {
            $params = ['limit' => 100];
            if ($startingAfter) {
                $params['starting_after'] = $startingAfter;
            }

            $customers = $stripeNew->customers->all($params);

            foreach ($customers->data as $customer) {
                try {
                    // Vérifie s'il y a un abonnement actif
                    $subs = $stripeNew->subscriptions->all(['customer' => $customer->id, 'limit' => 1]);
                    if (count($subs->data) === 0) {
                        $stripeNew->customers->delete($customer->id);
                        echo "✅ Supprimé : {$customer->id}\n";
                    } else {
                        echo "⛔ Non supprimé (abonnement actif) : {$customer->id}\n";
                    }
                } catch (\Exception $e) {
                    echo "❌ Erreur avec {$customer->id} : " . $e->getMessage() . "\n";
                }
            }

            $hasMore = $customers->has_more;
            if ($hasMore) {
                $startingAfter = end($customers->data)->id;
            }
        }



        /*
        \Stripe\Stripe::setApiKey('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');

        // Optionnel : pour ne suspendre que les abonnements actifs
        $filters = [
            'status' => 'active',
            'limit' => 100, // max autorisé
        ];

        try {
            $subscriptions = \Stripe\Subscription::all($filters);

            $count = 0;

            foreach ($subscriptions->autoPagingIterator() as $subscription) {
                \Stripe\Subscription::update($subscription->id, [
                    'pause_collection' => [
                        'behavior' => 'mark_uncollectible', // ou 'void'
                    ],
                ]);

                echo "Abonnement suspendu : " . $subscription->id . PHP_EOL;
                $count++;
            }

            echo "Total des abonnements suspendus : $count" . PHP_EOL;
        } catch (\Stripe\Exception\ApiErrorException $e) {
            echo 'Erreur Stripe : ' . $e->getMessage();
        }
*/
    }

    public function handleRevolutCard()
    {

        $customer_id = $this->data['user']['revolut_customer_id'];

        $orders = APPUP::rev_call('GET', '/api/orders?customer_id=' . $customer_id . '&state=completed');

        if (!empty($orders)) {
            $latestOrderId = $orders['orders'][0]['id'];

            // 2) Liste des paiements de cet order
            $payments = APPUP::rev_call('GET', "/api/orders/{$latestOrderId}/payments");


            foreach ($payments as $p) {
                if (!empty($p['payment_method']['id'])) {
                    $payment_method = $p['payment_method']['id'];
                    break;
                }
            }

            $this->nx_client->update('User', $this->data['user']['id'], ['revolut_payment_method_id' => $payment_method]);

            redirect(site_url('success'));
        }
    }

    public function renewRevolutSubscription()
    {
        if (!empty($_GET['key']) && $_GET['key'] == 'mJ99VovE') {
            // ✅ On get les users à renew (autorenew = 1)

            $starting_execution_date = microtime(true);

            $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic ' . ADMIN_BASIC]]);

            // $start_date = '2025-08-02 00:00:01';
            $start_date = date('Y-m-d 00:00:01', strtotime('-7 days'));
            $end_date = date('Y-m-d 23:59:59');
            // $end_date = date('2025-08-19 23:59:59');

            $get_users_to_renew = $this->nx_client->getList('User', ['filter' => ['member_until,btw,' . $start_date . ',' . $end_date, 'autorenew,eq,1', 'revolut_customer_id,nnull', 'revolut_payment_method_id,nnull']]);


            // ✅ Dont la date de fin d'abonnement est égale à aujourd'hui ou supérieure à aujourd'hui MOINS 7 jours (pour re-tester en cas d'échec)
            // ✅ Exception faite jusqu'à fin août (à ou plus), égale à aujourd'hui ou supérieure au 02/08/2025
            // ✅ Dont le revolut_customer_id est bien OK
            //Dont le revolut_payment_method_id est bien OK
            //---> Retour de la liste des utilisateurs concernés par les conditions ci-dessus

            //Si tout est OK, on boucle sur chaque user pour le débiter le payment_method selon le nombre de logements actifs au moment T


            // die('STOOOOP');

            if (!empty($get_users_to_renew)) {
                $global_result = [];

                foreach ($get_users_to_renew as $user_to_renew) {
                    $customer_id       = $user_to_renew['revolut_customer_id'];
                    $payment_method_id = $user_to_renew['revolut_payment_method_id'];

                    if (!empty($payment_method_id) && $payment_method_id != 'no_renew') {



                        $user_filter = ['user_unique_id,eq,' . $user_to_renew['unique_id']];


                        $get_annonces = $this->nx_client->getList('AnnonceList', ['fields' => 'id,unique_id,user_unique_id,title,to_review,annonces_to_review,username,address,zipcode,city,country,type,deleted,channel_item_id,member_until,active_plan,platform_reference,platform_lang', 'filter' => $user_filter, 'order' => 'id desc', 'limit' => 200]);

                        $active_annonces = count(array_filter($get_annonces, fn($annonce) => empty($annonce['deleted'])));

                        $billing_infos = APPUP::getNextBillingAmount($active_annonces);

                        $amount_to_pay = $billing_infos['amount_to_pay'];


                        $amount_to_debit      = $amount_to_pay;

                        if (!$customer_id || !$payment_method_id || $amount_to_debit <= 0) {
                            show_error('Paramètres manquants', 400);
                        }

                        // 1) créer un order
                        $order = APPUP::rev_call('POST', '/api/orders', [
                            'amount'      => $amount_to_debit,
                            'currency'    => 'EUR',
                            'customer'    => ['id' => $customer_id],
                            'description' => 'Abonnement mensuel'
                        ]);

                        // 2) payer avec la méthode sauvegardée (initiator=merchant)
                        $pay = APPUP::rev_call('POST', "/api/orders/{$order['id']}/payments", [
                            'saved_payment_method' => [
                                'type'      => 'card',  // ou 'revolut_pay'
                                'id'        => $payment_method_id,
                                'initiator' => 'merchant'
                            ]
                        ]);
                    } else {
                        $order = 'no_renew_profile';
                        $pay = 'no_renew_profile';
                    }

                    $result = [
                        'user_id' => $user_to_renew['id'],
                        'user_email' => $user_to_renew['email'],
                        'order' => $order ?? [],
                        'payment' => $pay ?? []
                    ];

                    //Update member until
                    array_push($global_result, $result);

                    if (date('Y-m-d', strtotime($user_to_renew['member_until'])) == date('Y-m-d')) {
                        // today + 1 mois
                        $new_date = (new DateTime())->modify('+1 month')->format('Y-m-d');
                    } else {
                        // member_until + 1 mois
                        $new_date = (new DateTime($user_to_renew['member_until']))->modify('+1 month')->format('Y-m-d');
                    }


                    $this->nx_client->update('User', $user_to_renew['id'], ['member_until' => $new_date]);
                }


                // Heure de fin
                $ending_execution_date = microtime(true);

                // Format lisible
                $startFormatted = date("Y-m-d H:i:s", (int)$starting_execution_date);
                $endFormatted   = date("Y-m-d H:i:s", (int)$ending_execution_date);


                $cron_data = [
                    'starting_execution_date' => $startFormatted,
                    'ending_execution_date' => $endFormatted,
                    'response' => json_encode($global_result)
                ];

                $this->nx_client->create('Crons', $cron_data);
            }
        }
    }

    public function duplicateAnnonce()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            redirect(site_url('dashboard'));
            return;
        }

        $annonce_id = (int) $_POST['annonce_id'];
        $new_name = trim($_POST['new_name']);

        if (empty($new_name)) {
            $this->session->set_flashdata('notif', [
                'type' => 'error',
                'value' => 'Le nouveau titre est requis'
            ]);
            redirect(site_url('dashboard'));
            return;
        }

        try {
            // Récupérer l'annonce originale
            $get_annonce = $this->nx_client->getOne('Annonce', $annonce_id, []);

            if (!empty($get_annonce)) {
                // Préparer les données pour la duplication
                $get_annonce['title'] = $new_name;
                unset($get_annonce['id']);
                unset($get_annonce['unique_id']);
                unset($get_annonce['creation_date']);
                unset($get_annonce['change_dt']);
                unset($get_annonce['unique_reference']);
                unset($get_annonce['channel_item_id']);
                unset($get_annonce['platform_reference']);

                // Créer la nouvelle annonce
                $this->nx_client->create('Annonce', $get_annonce);

                $this->session->set_flashdata('notif', [
                    'type' => 'success',
                    'value' => 'Annonce dupliquée avec succès'
                ]);

                redirect(site_url('dashboard'));
            } else {
                $this->session->set_flashdata('notif', [
                    'type' => 'error',
                    'value' => 'Impossible de dupliquer l\'annonce. Veuillez réessayer.'
                ]);
                redirect(site_url('dashboard'));
            }
        } catch (Exception $e) {
            $this->session->set_flashdata('notif', [
                'type' => 'error',
                'value' => 'Erreur lors de la duplication : ' . $e->getMessage()
            ]);
            redirect(site_url('dashboard'));
        }
    }
}
