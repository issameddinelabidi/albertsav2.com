<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pricing extends CI_Controller
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

        $this->data['page_type'] = 'pricing';
        $this->data['page_title'] = 'Nos offres';

        $this->data['reviews'] = $this->nx_client->getList('Review', ['order' => 'id desc']);

        $tutu = STRIPE_SK;
        //Get plans FROM Stripe
        $stripe = new \Stripe\StripeClient(
            $tutu
        );

        $base_prods_ids = BASE_PROD_IDS;

        $prods = $stripe->products->all([]);

        $prods_list = [];
        foreach ($prods as $prod) {
            if (in_array($prod->id, $base_prods_ids)) {
                array_push($prods_list, $prod);
            }
        }

        $firstArray = $base_prods_ids;
        $secondArray = $prods_list;

        $prods_list = [];
        foreach ($firstArray as $id) {
            foreach ($secondArray as $product) {
                if ($product->id == $id) {
                    $product['is_popular'] = false;
                    $prods_list[] = $product;
                    break;
                }
            }
        }

        $prices_list = PRICES_LIST;

        // array_pop('price_1NeN7JJdLRveMDLtr4AKfLL0');
        // var_dump(PRICES_LIST);


        $t = implode(',', PRICES_LIST);

        $filters = ['stripe_product_id,in,' . $t];

        $flag = (APPUP::isAlbertAfrica()) ? 'ma' : 'fr';

        array_push($filters, 'flag,eq,' . $flag);

        if (empty($this->data['user'])) {
            $plans = $this->nx_client->getList('Plan', ['filter' => $filters, 'order' => 'id asc']);
        } else {
            $plans = $this->nx_client->getList('Plan', ['filter' => $filters, 'order' => 'id asc']);
        }

        $price_field = 'price';

        $plan_list = [];
        $plan_price = [];
        foreach ($plans as $plan) {
            $plan_list[$plan['stripe_product_id']] = $plan['content'];
            $plan_price[$plan['stripe_product_id']] = $plan[$price_field];
        }

        $this->data['plans_contents'] = $plan_list;
        $this->data['plan_price'] = $plan_price;


        $final_prices_list = [];

        //Guide prices IDs
        array_push($final_prices_list, $stripe->prices->retrieve(
            $prices_list[0],
            []
        ));

        //Chat prices IDs
        // array_push($final_prices_list, $stripe->prices->retrieve(
        //     $prices_list[1],
        //     []
        // ));

        //Premium prices IDs;
        array_push($final_prices_list, $stripe->prices->retrieve(
            $prices_list[1],
            []
        ));


        $this->data['products_list'] = $prods_list;
        $this->data['prices_list'] = $final_prices_list;

        $this->load->view('head', $this->data);
        $this->load->view('pricing/main_v3_new_business');
        $this->load->view('foot');
    }


    public function albertExtra()
    {

        $this->data['page_type'] = 'pricing';
        $this->data['page_title'] = 'Albert Extra';

        $this->data['reviews'] = $this->nx_client->getList('Review', ['order' => 'id desc']);

        $tutu = STRIPE_SK;
        //Get plans FROM Stripe
        $stripe = new \Stripe\StripeClient(
            $tutu
        );

        $base_prods_ids = BASE_PROD_IDS;

        $prods = $stripe->products->all([]);

        $prods_list = [];
        foreach ($prods as $prod) {
            if (in_array($prod->id, $base_prods_ids)) {
                array_push($prods_list, $prod);
            }
        }

        $firstArray = $base_prods_ids;
        $secondArray = $prods_list;

        $prods_list = [];
        foreach ($firstArray as $id) {
            foreach ($secondArray as $product) {
                if ($product->id == $id) {
                    $product['is_popular'] = false;
                    $prods_list[] = $product;
                    break;
                }
            }
        }

        $prices_list = PRICES_LIST;

        // array_pop('price_1NeN7JJdLRveMDLtr4AKfLL0');
        // var_dump(PRICES_LIST);


        $t = implode(',', PRICES_LIST);

        if (empty($this->data['user'])) {
            $plans = $this->nx_client->getList('Plan', ['filter' => ['stripe_product_id,in,' . $t,], 'order' => 'id asc']);
        } else {
            $plans = $this->nx_client->getList('Plan', ['filter' => ['stripe_product_id,in,' . $t], 'order' => 'id asc']);
        }

        $plan_list = [];
        $plan_price = [];
        foreach ($plans as $plan) {
            $plan_list[$plan['stripe_product_id']] = $plan['content'];
            $plan_price[$plan['stripe_product_id']] = $plan['price'];
        }

        $this->data['plans_contents'] = $plan_list;
        $this->data['plan_price'] = $plan_price;


        $final_prices_list = [];

        //Guide prices IDs
        array_push($final_prices_list, $stripe->prices->retrieve(
            $prices_list[0],
            []
        ));

        //Chat prices IDs
        // array_push($final_prices_list, $stripe->prices->retrieve(
        //     $prices_list[1],
        //     []
        // ));

        //Premium prices IDs;
        array_push($final_prices_list, $stripe->prices->retrieve(
            $prices_list[1],
            []
        ));


        $this->data['products_list'] = $prods_list;
        $this->data['prices_list'] = $final_prices_list;

        $this->load->view('head', $this->data);
        $this->load->view('pricing/discover_extra');
        $this->load->view('foot');
    }



    public function success()
    {
        $this->data['page_title'] = ALBERT_MERCI_POUR_VOTRE_ABONNEMENT;
        $this->data['page_type'] = 'pricing';

        $this->load->view('head', $this->data);
        $this->load->view('pricing/success');
        $this->load->view('foot');
    }

    public function cancel()
    {
        $this->data['page_title'] = ALBERT_VOTRE_PAIEMENT_NA_PAS_ABOUTI;
        $this->data['page_type'] = 'pricing';

        $this->load->view('head', $this->data);
        $this->load->view('pricing/cancel');
        $this->load->view('foot');
    }

    public function handleWebhook()
    {

        \Stripe\Stripe::setApiKey(getenv('STRIPE_SK'));

        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;
        $endpoint_secret = WHSEC;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload,
                $sig_header,
                $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            http_response_code(400);
            exit();
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            http_response_code(400);
            exit();
        }

        switch ($event->type) {
            case 'checkout.session.completed':
                switch ($event->data->object['mode']) {
                    case 'subscription':
                        //Check payment status
                        $payment_status = $event->data->object['payment_status'];

                        //Check ETA
                        $status = $event->data->object['status'];

                        if ($payment_status == 'paid' && $status == 'complete') {
                            $sub = \Stripe\Subscription::retrieve($event->data->object['subscription']);

                            $nb_annonces = $event->data->object['metadata']['nb_annonces'];



                            $event_infos = [
                                'current_period_start' => $sub['current_period_start'],
                                'current_period_end' => $sub['current_period_end'],
                                'customer_id' => $event->data->object['customer']
                            ];

                            APPUP::addWebhookEvent($event, $event->data->object['customer'], $this->nx_client);

                            //New transaction
                            $purchase = [
                                'transaction_id' => $event->id,
                                'event' => json_encode($event_infos),
                                'nb_annonces' => (int) $nb_annonces,
                                'period_start' => $sub['current_period_start'],
                                'period_end' => $sub['current_period_end'],
                                'customer_id' => $event->data->object['customer'],
                                'customer_email' => $event->data->object['customer_email'],
                                'customer_name' => $event->data->object['customer_name'],
                            ];

                            try {


                                $this->nx_client->create('UserPurchase', $purchase);

                                $data = [
                                    'email' => $event->data->object['customer_details']['email'],
                                    'type' => 'firstPassword'
                                ];

                                $action = $this->nx_client->create('UserRequest', $data);

                                echo 'ok';
                            } catch (Exception $e) {
                                var_dump($e);
                            }
                        }

                        break;

                    default:
                        die('coucou');
                        break;
                }
                break;

            case 'invoice.paid':
                //Check ETA
                $status = $event->data->object['status'];

                if ($status == 'paid') {
                    $sub = \Stripe\Subscription::retrieve($event->data->object['subscription']);

                    $event_infos = [
                        'current_period_start' => $event->data->object->lines->data[0]->period['start'],
                        'current_period_end' => $event->data->object->lines->data[0]->period['end'],
                        'customer_id' => $event->data->object['customer']
                    ];

                    $get_user = $this->nx_client->getList('User', ['filter' => ['stripe_id,eq,' . $event->data->object['customer']]]);

                    if (empty($get_user)) {
                        echo 'Impossible de récupérer l\'utilisateur';
                        die();
                    } else {

                        APPUP::addWebhookEvent($event, $get_user[0]['unique_id'], $this->nx_client);


                        //Is first one a ajouter
                        //GET Quantities ICI

                        // if (!empty($nb_annonces)){
                        $nb_annonces = 0;
                        // }


                        //New transaction
                        $purchase = [
                            'transaction_id' => $event->id,
                            'event' => json_encode($event_infos),
                            'nb_annonces' => (int) $nb_annonces,
                            'period_start' => $sub['current_period_start'],
                            'period_end' => $sub['current_period_end'],
                            'customer_id' => $event->data->object['customer'],
                            'customer_email' => $event->data->object['customer_email'],
                            'customer_name' => $event->data->object['customer_name'],
                        ];

                        try {

                            $this->nx_client->create('UserPurchase', $purchase);

                            // $email_token = [
                            //     'email_to' => $get_user[0]['email'],
                            //     'username' => $get_user[0]['username']
                            // ];

                            // $email_token = JWT::encode($email_token, JWT_KEY);
                            // $this->nx_client->patch('Email', 3, 'send', ['token' => $email_token]);

                            echo 'ok';
                        } catch (Exception $e) {
                            var_dump($e);
                            http_response_code(400);
                        }
                    }
                }

                break;

            case 'customer.subscription.updated':
                $stripe_id = $event->data->object['customer'];
                $new_quantity = $event->data->object->items->data[0]['quantity'];

                $get_user = $this->nx_client->getList('User', ['filter' => ['stripe_id,eq,' . $stripe_id]]);

                if (empty($get_user)) {
                    echo 'Impossible de récupérer l\'utilisateur';
                    die();
                } else {
                    $user_id = $get_user[0]['id'];

                    $infos = [
                        'max_annonces' => $new_quantity
                    ];


                    $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=', 'Accept-Language: ' . LANG]]);

                    $this->nx_client->update('User', $user_id, $infos);

                    /*
                    $email_token = [
                        'email_to' => CONTACT_MAIL,
                        'email' => $get_user[0]['email'],
                        'quantity' => $new_quantity
                    ];

                    $email_token = JWT::encode($email_token, JWT_KEY);
                    $this->nx_client->patch('Email', 3, 'send', ['token' => $email_token]);
*/
                }

                break;
            default:
                break;
        }

        echo 'ok';
    }

    public function handleWebhookLLP()
    {

        \Stripe\Stripe::setApiKey(getenv('STRIPE_SK'));

        $payload = @file_get_contents('php://input');
        $sig_header = $_SERVER['HTTP_STRIPE_SIGNATURE'];
        $event = null;
        $endpoint_secret = WHSECUK;

        try {
            $event = \Stripe\Webhook::constructEvent(
                $payload,
                $sig_header,
                $endpoint_secret
            );
        } catch (\UnexpectedValueException $e) {
            // Invalid payload
            http_response_code(400);
            exit();
        } catch (\Stripe\Exception\SignatureVerificationException $e) {
            // Invalid signature
            http_response_code(400);
            exit();
        }


        switch ($event->type) {
            case 'checkout.session.completed':

                $session = $event->data->object;

                switch ($event->data->object['mode']) {
                    case 'setup':
                        $customerId = $session->customer;
                        $setupIntentId = $session->setup_intent;

                        $priceId = 'price_1Rs9QKL93GOZybItffrMAvHM'; //TEST
                        $billingStartDate = strtotime('2025-09-01'); // exemple de démarrage différé

                        try {
                            // Récupérer le setup intent pour avoir le payment_method
                            $intent = \Stripe\SetupIntent::retrieve($setupIntentId);
                            $paymentMethodId = $intent->payment_method;

                            // Associer la CB comme défaut du client
                            \Stripe\Customer::update($customerId, [
                                'invoice_settings' => [
                                    'default_payment_method' => $paymentMethodId,
                                ],
                            ]);

                            //Get quantity and start date from cus_xxxx

                            // Créer un abonnement usage-based
                            \Stripe\Subscription::create([
                                'customer' => $customerId,
                                'items' => [[
                                    'price' => $priceId,
                                    'quantity' => 12 // volume facturé plus tard via usage_records
                                ]],
                                'default_payment_method' => $paymentMethodId,
                                'billing_cycle_anchor' => $billingStartDate,
                                'proration_behavior' => 'none',
                                'collection_method' => 'charge_automatically',
                                'expand' => ['latest_invoice.payment_intent'],
                                'metadata' => [
                                    'migrated_from' => $session->metadata->old_customer_id ?? 'N/A'
                                ]
                            ]);

                            http_response_code(200);
                            exit("✅ Abonnement créé pour $customerId\n");
                        } catch (Exception $e) {
                            http_response_code(500);
                            exit("❌ Erreur création abonnement : " . $e->getMessage());
                        }

                        break;

                    case 'subscription':
                        //Check payment status
                        $payment_status = $event->data->object['payment_status'];

                        //Check ETA
                        $status = $event->data->object['status'];


                        if ($payment_status == 'paid' && $status == 'complete') {
                            $sub = \Stripe\Subscription::retrieve($event->data->object['subscription']);

                            $product = $sub->items->data[0]['price']['id'];

                            $get_plan = $this->nx_client->getList('Plan', ['filter' => ['stripe_product_id,eq,' . $product]]);

                            if (!empty($get_plan)) {

                                $event_infos = [
                                    'current_period_start' => $sub['current_period_start'],
                                    'current_period_end' => $sub['current_period_end'],
                                    'customer_id' => $event->data->object['customer'],
                                    'type' => $event['type']
                                ];


                                if (!empty($event->data->object['customer_email']) || !empty($event->data->object['customer_details'])) {

                                    APPUP::addWebhookEvent($event, $event->data->object['customer'], $this->nx_client);

                                    if (!empty($event->data->object['customer_email'])) {
                                        $cus_id = $event->data->object['customer'];
                                        $cus_email = $event->data->object['customer_email'];
                                        $cus_name = $event->data->object['customer_name'];
                                    } else {
                                        $cus_id = $event->data->object['customer'];
                                        $cus_email = $event->data->object['customer_details']->email;
                                        $cus_name = $event->data->object['customer_details']->name;
                                    }

                                    //New transaction
                                    $purchase = [
                                        'transaction_id' => $event->id,
                                        'event' => json_encode($event_infos),
                                        'period_start' => $sub['current_period_start'],
                                        'period_end' => $sub['current_period_end'],
                                        'customer_id' => $cus_id,
                                        'customer_email' => $cus_email,
                                        'customer_name' => $cus_name
                                    ];

                                    //If we are in extra mode
                                    if ($get_plan[0]['type'] == 'extra') {
                                        $purchase['bought_plan'] = 99;
                                        $nb_annonces = 0;
                                    } else {
                                        $purchase['bought_plan'] = $get_plan[0]['real_id'];
                                        $nb_annonces = $sub->items->data[0]['quantity'];
                                    }

                                    $purchase['nb_annonces'] = (int) $nb_annonces;

                                    try {
                                        $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);

                                        $this->nx_client->create('UserPurchase', $purchase);
                                        echo 'ok1';
                                    } catch (Exception $e) {
                                        var_dump($e);
                                        http_response_code(400);
                                    }
                                }
                            }
                        }

                        break;

                    default:
                        die('coucou');
                        break;
                }
                break;

            case 'invoice.paid':
                //Check ETA
                $status = $event->data->object['status'];

                if ($status == 'paid') {
                    $sub = \Stripe\Subscription::retrieve($event->data->object['subscription']);

                    $product = $sub->items->data[0]['price']['id'];
                    $nb_annonces = $sub->items->data[0]['quantity'];

                    $event_infos = [
                        'current_period_start' => $event->data->object->lines->data[0]->period['start'],
                        'current_period_end' => $event->data->object->lines->data[0]->period['end'],
                        'customer_id' => $event->data->object['customer'],
                        'type' => $event['type']
                    ];

                    // $get_user = $this->nx_client->getList('User', ['filter' => ['stripe_id,eq,' . $event->data->object['customer']]]);

                    // if (empty($get_user)) {
                    //     echo 'Impossible de récupérer l\'utilisateur';
                    //     http_response_code(400);
                    //     die();
                    // } else {

                    APPUP::addWebhookEvent($event, $event->data->object['customer'], $this->nx_client);


                    //Is first one a ajouter
                    //GET Quantities ICI

                    // if (!empty($nb_annonces)){
                    // $nb_annonces = 0;
                    // }

                    if (!empty($event->data->object['customer_email'])) {
                        //New transaction
                        $purchase = [
                            'transaction_id' => $event->id,
                            'event' => json_encode($event_infos),
                            'nb_annonces' => (int) $nb_annonces,
                            'period_start' => $sub['current_period_start'],
                            'period_end' => $sub['current_period_end'],
                            'customer_id' => $event->data->object['customer'],
                            'customer_email' => $event->data->object['customer_email'],
                            'customer_name' => $event->data->object['customer_name'],
                        ];

                        // if (!empty($event->data->object['metadata']['bought_plan'])) {

                        $get_plan = $this->nx_client->getList('Plan', ['filter' => ['stripe_product_id,eq,' . $product]]);
                        // if (!empty($get_plan)) {
                        //     // $purchase['bought_plan'] = $event->data->object['metadata']['bought_plan'];
                        //     $purchase['bought_plan'] = $get_plan[0]['real_id'];
                        // }
                        // }

                        //If we are in extra mode
                        if ($get_plan[0]['type'] == 'extra') {
                            $purchase['bought_plan'] = 99;
                            $nb_annonces = 0;
                        } else {
                            $purchase['bought_plan'] = $get_plan[0]['real_id'];
                            $nb_annonces = $sub->items->data[0]['quantity'];
                        }

                        $purchase['nb_annonces'] = (int) $nb_annonces;

                        try {
                            $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=']]);

                            $this->nx_client->create('UserPurchase', $purchase);
                            echo 'ok';
                        } catch (Exception $e) {
                            var_dump($e);
                            http_response_code(400);
                            die();
                        }
                        // }
                    }
                }

                break;

            case 'customer.subscription.updated':
                $stripe_id = $event->data->object['customer'];

                $sub = \Stripe\Subscription::retrieve($event->data->object->items->data[0]['subscription']);

                $product = $sub->items->data[0]['price']['id'];
                $new_quantity = $sub->items->data[0]['quantity'];

                $get_user = $this->nx_client->getList('User', ['filter' => ['stripe_id,eq,' . $stripe_id]]);

                if (empty($get_user)) {
                    echo 'Impossible de récupérer l\'utilisateur';
                    http_response_code(400);
                    die();
                } else {
                    $user_id = $get_user[0]['id'];

                    $infos = [
                        'max_annonces' => $new_quantity
                    ];

                    $get_plan = $this->nx_client->getList('Plan', ['filter' => ['stripe_product_id,eq,' . $product]]);
                    if (!empty($get_plan)) {
                        // $purchase['bought_plan'] = $event->data->object['metadata']['bought_plan'];
                        $purchase['bought_plan'] = $get_plan[0]['real_id'];
                    }

                    $this->nx_client = new NxClient([WS_URL, null, null, ['Authorization: Basic Ym90QGFsYmVydHNhdi5jb206bUo5OVZvdkU=', 'Accept-Language: ' . LANG]]);

                    try {
                        $this->nx_client->update('User', $user_id, $infos);

                        $email_token = [
                            'email_to' => CONTACT_MAIL,
                            'email' => $get_user[0]['email'],
                            'quantity' => $new_quantity
                        ];

                        $email_token = JWT::encode($email_token, JWT_KEY);
                        $this->nx_client->patch('Email', 3, 'send', ['token' => $email_token]);
                    } catch (Exception $e) {
                        var_dump($e);
                        http_response_code(400);
                    }
                }

                break;
            default:
                break;
        }

        echo 'FINISHED';
        http_response_code(200);
    }

    public function getStripeInvoices()
    {
        $get_all_users = $this->nx_client->getList('User', []);

        $fathers = [];
        $fathers_full = [];
        $childs = [];
        foreach ($get_all_users as $child) {
            if (!empty($child['father'])) {
                array_push($childs, $child);
                if (!in_array($child['father'], $fathers)) {
                    array_push($fathers, $child['father']);
                }

                $child['amount_paid'] = 0;
                $child['period_start'] = '';

                $fathers_full[$child['father']]['amount_to_send'] = 0;
                $fathers_full[$child['father']][$child['stripe_id']] = $child;
            }
        }

        $stripe_first_account = new \Stripe\StripeClient(getenv('STRIPE_SK'));
        $stripe_second_account = new \Stripe\StripeClient(STRIPE_SK);

        $start_date = date('Y-m-01 00:00:01', strtotime('-1 month'));
        $end_date = date('Y-m-t 23:59:59', strtotime($start_date));

        $invoice_to_keep = [];

        $startingAfter_fa = null;
        $startingAfter_sa = null;

        $real_inv_fa = [];

        do {
            if (empty($startingAfter_fa)) {
                $params = [
                    'created' => [
                        'gte' => strtotime($start_date),
                        'lte' => strtotime($end_date),
                    ],
                    'limit' => 300
                ];
            } else {
                $params = [
                    'created' => [
                        'gte' => strtotime($start_date),
                        'lte' => strtotime($end_date),
                    ],
                    'limit' => 300,
                    'starting_after' => $startingAfter_fa,
                ];
            }

            $inv = $stripe_first_account->paymentIntents->all($params);

            array_push($real_inv_fa, $inv);

            // Update the starting_after variable for the next request
            $lastPaymentIntent = end($inv->data);

            if (!empty($lastPaymentIntent['id'])) {
                $startingAfter_fa = $lastPaymentIntent['id'];
            }
        } while ($inv->has_more);

        if (count($real_inv_fa) >= 1) {
            foreach ($real_inv_fa as $array) {
                $mergedArray_fa['object'] = $array['object'];
                $mergedArray_fa['data'] = array_merge($mergedArray_fa['data'] ?? [], $array['data']);
                $mergedArray_fa['has_more'] = $array['has_more'];
                $mergedArray_fa['url'] = $array['url'];
            }
        }

        $real_inv_sa = [];
        do {
            if (empty($startingAfter_sa)) {
                $params = [
                    'created' => [
                        'gte' => strtotime($start_date),
                        'lte' => strtotime($end_date),
                    ],
                    'limit' => 300
                ];
            } else {
                $params = [
                    'created' => [
                        'gte' => strtotime($start_date),
                        'lte' => strtotime($end_date),
                    ],
                    'limit' => 300,
                    'starting_after' => $startingAfter_sa,
                ];
            }

            $inv = $stripe_second_account->paymentIntents->all($params);

            array_push($real_inv_sa, $inv);

            // Update the starting_after variable for the next request
            $lastPaymentIntent = end($inv->data);
            if (!empty($lastPaymentIntent)) {
                $startingAfter_sa = $lastPaymentIntent['id'];
            }
        } while ($inv->has_more);

        if (count($real_inv_sa) >= 1) {
            foreach ($real_inv_sa as $array) {
                $mergedArray_sa['object'] = $array['object'];
                $mergedArray_sa['data'] = array_merge($mergedArray_sa['data'] ?? [], $array['data']);
                $mergedArray_sa['has_more'] = $array['has_more'];
                $mergedArray_sa['url'] = $array['url'];
            }
        }


        foreach ($childs as $c) {

            if (!empty($c['is_from_first_stripe_account'])) {
                if (empty($mergedArray_fa['data'])) {
                    continue;
                }

                // $payments = $mergedArray_fa['data'];
            } else {
                if (empty($mergedArray_sa['data'])) {
                    continue;
                }
                // $payments = $mergedArray_sa['data'];
            }

            switch ($this->uri->segment(3)) {
                case 'fr':
                    // if (!empty($c['is_from_first_stripe_account'])) {

                    // if (!empty($mergedArray_fa['data'])) {
                    $payments = $mergedArray_fa['data'];
                    // }
                    // }

                    break;
                case 'uk':
                    // if (empty($c['is_from_first_stripe_account'])) {

                    // if (!empty($mergedArray_sa['data'])) {
                    $payments = $mergedArray_sa['data'];
                    // }
                    // }
                    break;

                default:
                    die('Type compte Stripe manquant');
                    break;
            }

            // if (empty($payments)) {
            //     continue;
            // }
            if (!empty($payments)) {
                foreach ($payments as $i) {
                    if ($i['status'] == 'succeeded' && $i['customer'] == $c['stripe_id']) {
                        $period_start = date('Y-m-d', $i['created']);
                        // if ($period_start >= $start_date && $period_start <= $end_date) {

                        $invoice_to_keep[$c['id']] = $i;
                        // var_dump($i['amount_paid']);
                        // die();
                        $fathers_full[$c['father']][$c['stripe_id']]['amount_paid'] = $i['amount'];
                        $fathers_full[$c['father']][$c['stripe_id']]['period_start'] = $period_start;
                        $fathers_full[$c['father']]['amount_to_send'] = $fathers_full[$c['father']]['amount_to_send'] + $i['amount'];
                        // var_dump($fathers_full[$c['father']][$c['stripe_id']]['amount_paid']);
                        // die();
                        // }
                    }
                }
            }
        }

        echo json_encode($fathers_full);
    }
}
