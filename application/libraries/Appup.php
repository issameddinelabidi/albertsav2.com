<?php
class Appup
{

    private $CI;

    function __construct()
    {
        $this->CI = get_instance();
    }

    static function getUserFromBasic($basic)
    {
        $nx_client = new NxClient([WS_URL, null, null, ["Authorization: Basic " . $basic]]);

        try {
            $user = $nx_client->getOne('me', '', []);

            return $user;
        } catch (Exception $e) {
            switch ($e->getCode()) {
                case 1024:
                    $this->session->set_flashdata('errorLogin', _LOGIN_ERROR);
                    break;
            }

            session_destroy();
            redirect(site_url());
        }
    }

    static function checkIfProfilComplete($user)
    {
        if ($user['access_level'] == 10) {
            if (empty($user['revolut_customer_id']) || empty($user['revolut_payment_method_id'])) {
                redirect(site_url('subscription/askForPm'));
            }
            if (empty($user['first_name']) || empty($user['first_name']) || empty($user['last_name']) || empty($user['direct_phone']) || empty($user['direct_phone'])) {
                redirect(site_url('account#profile'));
            }
        }
    }

    static function addWebhookEvent($event, $user_unique_id, $client)
    {
        //Check idempotency
        try {
            //Create new Webhook event in DB
            $webhook_datas = [
                'type' => $event->type,
                'request_id' => $event->request->id,
                'request_idempotency' => (!empty($event->request->idempotency_key)) ? $event->request->idempotency_key : time() . '--' . $user_unique_id,
                'event' => json_encode($event),
                'api_version' => $event->api_version,
                'creation_date' => date('Y-m-d H:i:s', $event->created)
            ];

            $client->create('WebhookEvent', $webhook_datas);
        } catch (Exception $e) {
            echo 'Doublon';
            die();
        }
    }

    /**
     * Appel HTTP générique vers Revolut Merchant (sandbox).
     * $path : ex "/api/1.0/customers" ou "/api/orders"
     * $body : array PHP (sera json_encode si non null)
     * Ajoute l'en-tête Revolut-Api-Version seulement pour "/api/..." hors "/api/1.0/...".
     */
    static function rev_call(string $method, string $path, ?array $body = null): array
    {
        $url = rtrim(REVOLUT_BASE_URL, '/') . $path;

        $headers = [
            'Authorization: Bearer ' . REVOLUT_SK,
            'Content-Type: application/json',
        ];

        // Pour les endpoints modernes (ex: /api/orders), on envoie l'API version.
        // Pour "/api/1.0/..." (customers), on NE PASSE PAS cet en-tête.
        if (preg_match('#^/api/(?!1\.0/)#', $path)) {
            $headers[] = 'Revolut-Api-Version: ' . REVOLUT_API_VERSION;
        }

        $ch = curl_init($url);
        $opts = [
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST  => strtoupper($method),
            CURLOPT_HTTPHEADER     => $headers,
            CURLOPT_TIMEOUT        => 20,
        ];
        if ($body !== null && strtoupper($method) !== 'GET') {
            $opts[CURLOPT_POSTFIELDS] = json_encode($body);
        }
        curl_setopt_array($ch, $opts);

        $res  = curl_exec($ch);
        if ($res === false) {
            $err = curl_error($ch);
            curl_close($ch);
            throw new Exception('cURL: ' . $err);
        }
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        if ($code >= 300) {
            throw new Exception("HTTP $code: $res");
        }
        $decoded = json_decode($res, true);
        return is_array($decoded) ? $decoded : [];
    }

    static function writeLog($message)
    {
        // Dossier de logs
        $log_dir = "/home/albertsav.com/appup_test_logs";

        // S'assure que le dossier existe
        if (!is_dir($log_dir)) {
            mkdir($log_dir, 0775, true);
        }

        // Nom du fichier basé sur la date
        $log_file = $log_dir . "/logs_" . date("Y-m-d") . ".txt";

        // Format du message avec timestamp
        $log_message = "[" . date("Y-m-d H:i:s") . "] " . $message . "\n";

        // Écriture dans le fichier
        file_put_contents($log_file, $log_message, FILE_APPEND | LOCK_EX);
    }


    static function getNextBillingAmount($active_annonces)
    {
        if (empty($active_annonces)) {
            return 0;
        }

        //Get Next Billing amount
        $prices_steps = [
            55 => 1795,
            20 => 1899,
            0 => 1999
        ];

        foreach ($prices_steps as $step => $price) {
            if ($active_annonces >= $step) {
                $amount_per_annonce = $price;
                break;
            }
        }

        $return = [
            'amount_per_annonce' => $amount_per_annonce,
            'amount_to_pay' => $amount_per_annonce * $active_annonces
        ];

        return $return;
    }


    static function displaySubscriptionState($member_until, $profile_id, $me_id)
    {
        if (empty($member_until) || ($member_until < date('Y-m-d'))) {

            $limit_date = date('Y-m-d', strtotime("+7 day", strtotime($member_until)));

            if (date('Y-m-d') < $limit_date) {
                $color = 'warning';

                if ($profile_id == $me_id) {
                    $string = 'Attention, vous êtes en période de grâce. Vos annonces ne seront bientôt plus traitées par nos agents.';
                } else {
                    $string = 'Attention, ce membre est en période de grâce.';
                }
            } else {
                $color = 'danger';

                if ($profile_id == $me_id) {
                    $string = 'Attention, vous n\'êtes plus abonné. Vos annonces ne sont plus traitées par nos agents.';
                } else {
                    $string = 'Attention, ce membre n\'est plus abonné.';
                }
            }


?>
            <div class="alert alert-<?= $color; ?>">
                <strong><?= $string; ?></strong>
            </div>
        <?php
        } else {
        ?>
            <div class="alert alert-success">
                <strong>Abonné jusqu'au <?= APPUP::getFullDate($member_until); ?></strong>
            </div>
            <?php
        }
    }

    static function checkSubscriptionState($member_until)
    {

        if (empty($member_until) || ($member_until < date('Y-m-d'))) {

            $limit_date = date('Y-m-d', strtotime("+7 day", strtotime($member_until)));

            if (date('Y-m-d') < $limit_date) {
                $state = 'grace';
            } else {
                $state = 'expired';
            }
        } else {
            $state = 'active';
        }

        return $state;
    }

    /**
     * Check if the profile is complete or have missing fields
     * @param string $user Array of the current user
     * @param string $return_type If false, the function will redirect to parameters page, else, the function will return a boolean
     * @return bool state
     **/
    static function isProfileComplete($user, $return_type = false)
    {
        if (empty($user['birthdate'])) {
            if (!empty($return_type)) {
                return false;
            } else {
                redirect(site_url('parametres'));
            }
        }

        return true;
    }

    static function isSubscribed($member_until = null)
    {
        $return = false;

        if ($member_until >= date('Y-m-d H:i:s')) {
            $return = true;
        }

        return $return;
    }


    static function smallMonth($month)
    {
        $list = [
            'Jan' => 'Jan',
            'Feb' => 'Fév',
            'Mar' => 'Mar',
            'Apr' => 'Avr',
            'May' => 'Mai',
            'Jun' => 'Jui',
            'Jul' => 'Jui',
            'Aug' => 'Aoû',
            'Sep' => 'Sep',
            'Oct' => 'Oct',
            'Nov' => 'Nov',
            'Dec' => 'Déc'
        ];

        return $list[$month];
    }


    function createPaginationArray($current_page, $quantity_of_pages)
    {

        $default_state = false;

        $full_table = [
            1 => $default_state,
            $current_page - 3 => $default_state,
            $current_page - 2 => $default_state,
            $current_page - 1 => $default_state,
            $current_page => $default_state,
            $current_page + 1 => $default_state,
            $current_page + 2 => $default_state,
            $current_page + 3 => $default_state
        ];

        for ($page = 1; $page <= $quantity_of_pages; $page++) {
            if ($page % 5 == 0) {
                if (!in_array($page, $full_table)) {
                    $full_table[$page] = $default_state;
                }
            }
        }

        $full_table[$current_page] = true;

        ksort($full_table);

        foreach ($full_table as $key => $value) {
            if ($key < 1 || $key > $quantity_of_pages) {
                unset($full_table[$key]);
            }
        }

        return $full_table;
    }

    static function getTime($full_date)
    {
        return date('H:i', strtotime($full_date));
    }

    static function getFullDate($full_date, $with_time = true, $lang = 'fr')
    {

        switch ($lang) {
            case 'fr':
                $month = [
                    1 => 'Janvier',
                    2 => 'Février',
                    3 => 'Mars',
                    4 => 'Avril',
                    5 => 'Mai',
                    6 => 'Juin',
                    7 => 'Juillet',
                    8 => 'Août',
                    9 => 'Septembre',
                    10 => 'Octobre',
                    11 => 'Novembre',
                    12 => 'Décembre'
                ];

                $at_word = 'à';
                break;

            default:
                $month = [
                    1 => 'January',
                    2 => 'February',
                    3 => 'March',
                    4 => 'April',
                    5 => 'May',
                    6 => 'June',
                    7 => 'July',
                    8 => 'August',
                    9 => 'September',
                    10 => 'October',
                    11 => 'November',
                    12 => 'December'
                ];

                $at_word = 'at';
                break;
        }

        $time = ($with_time) ? ' ' . $at_word . ' ' . date('H:i', strtotime($full_date)) : '';

        $final_date = date('d', strtotime($full_date)) . ' ' . $month[date('n', strtotime($full_date))] . ' ' . date('Y', strtotime($full_date)) . $time;

        return $final_date;
    }

    public static function secToDaysHoursMinutes($seconds)
    {
        $days = floor($seconds / 86400);
        $hours = floor(($seconds - $days * 86400) / 3600);
        $minutes = floor(ceil(($seconds / 60)) % 60);

        return $minutes;
    }


    static function prettyDate($date)
    {
        //Si c'est aujourd'hui
        if (date('Y-m-d') == date('Y-m-d', strtotime($date))) {
            // return 'Aujourd\'hui à ' . date('H:i:s', strtotime($date));
            $now = time();
            $log = strtotime($date);
            $diff = $now - $log;

            if (($diff / 60) < 60) {
                if (($diff / 60) < 1) {
                    return 'A l\'instant';
                } else {
                    return 'Il y a ' . APPUP::secToDaysHoursMinutes($diff) . ' min';
                }
            } else {
                return date('H:i', strtotime($date));
            }
        }

        //Si c'est hier
        if (date('Y-m-d', strtotime('-1 day', time())) == date('Y-m-d', strtotime($date))) {
            return 'Hier à ' . date('H:i', strtotime($date));
        }

        return date('d/m/Y à H:i', strtotime($date));
    }

    static function getBrowserInfo()
    {
        $u_agent = $_SERVER['HTTP_USER_AGENT'];
        $bname = 'Unknown';
        $ub = 'Unknown';
        $version = "";
        $platform = 'Unknown';

        $deviceType = 'Desktop';

        if (preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i', $u_agent) || preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i', substr($u_agent, 0, 4))) {

            $deviceType = 'Mobile';
        }

        if ($_SERVER['HTTP_USER_AGENT'] == 'Mozilla/5.0(iPad; U; CPU iPhone OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B314 Safari/531.21.10') {
            $deviceType = 'Tablet';
        }

        if (stristr($_SERVER['HTTP_USER_AGENT'], 'Mozilla/5.0(iPad;')) {
            $deviceType = 'Tablet';
        }

        //$detect = new Mobile_Detect();

        //First get the platform?
        if (preg_match('/linux/i', $u_agent)) {
            $platform = 'linux';
        } elseif (preg_match('/macintosh|mac os x/i', $u_agent)) {
            $platform = 'mac';
        } elseif (preg_match('/windows|win32/i', $u_agent)) {
            $platform = 'windows';
        }

        // Next get the name of the user agent yes seperately and for good reason
        if (preg_match('/MSIE/i', $u_agent) && !preg_match('/Opera/i', $u_agent)) {
            $bname = 'IE';
            $ub = "MSIE";
        } else if (preg_match('/Firefox/i', $u_agent)) {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        } else if (preg_match('/Chrome/i', $u_agent) && (!preg_match('/Opera/i', $u_agent) && !preg_match('/OPR/i', $u_agent))) {
            $bname = 'Chrome';
            $ub = "Chrome";
        } else if (preg_match('/Safari/i', $u_agent) && (!preg_match('/Opera/i', $u_agent) && !preg_match('/OPR/i', $u_agent))) {
            $bname = 'Safari';
            $ub = "Safari";
        } else if (preg_match('/Opera/i', $u_agent) || preg_match('/OPR/i', $u_agent)) {
            $bname = 'Opera';
            $ub = "Opera";
        } else if (preg_match('/Netscape/i', $u_agent)) {
            $bname = 'Netscape';
            $ub = "Netscape";
        } else if ((isset($u_agent) && (strpos($u_agent, 'Trident') !== false || strpos($u_agent, 'MSIE') !== false))) {
            $bname = 'Internet Explorer';
            $ub = 'Internet Explorer';
        }


        // finally get the correct version number
        $known = array('Version', $ub, 'other');
        $pattern = '#(?<browser>' . join('|', $known) . ')[/ ]+(?<version>[0-9.|a-zA-Z.]*)#';

        if (!preg_match_all($pattern, $u_agent, $matches)) {
            // we have no matching number just continue
        }

        // see how many we have
        $i = count($matches['browser']);
        if ($i != 1) {
            //we will have two since we are not using 'other' argument yet
            //see if version is before or after the name
            if (strripos($u_agent, "Version") < strripos($u_agent, $ub)) {
                $version = $matches['version'][0];
            } else {
                $version = @$matches['version'][1];
            }
        } else {
            $version = $matches['version'][0];
        }

        // check if we have a number
        if ($version == null || $version == "") {
            $version = "?";
        }

        return array(
            'user_agent' => $u_agent,
            'browser'      => $bname,
            'browser_version'   => $version,
            'os_platform'  => $platform,
            'pattern'   => $pattern,
            'device'    => $deviceType,
            'ip_address' => $_SERVER['REMOTE_ADDR']
        );
    }



    static function checkIfWeCanSendMessage($client, $unique_id)
    {
        $recipient = $client->getList('User', ['filter' => ['unique_id,eq,' . $unique_id]]);

        $val = false;
        if (empty($recipient) || empty($recipient[0]['birthdate'])) {
            $val = false;
        }

        $val = true;

        if (empty($val)) {
            die('On ne peut pas envoyer de message au mec');
        } else {
            return $recipient[0];
            // die('ON CONTINUE');
        }
    }

    static function generateSendMessageButton($user, $dest, $size, $style)
    {
        if ($style == 'classic') {
            $css = 'style-c1';
        } else {
            $css = 'btn-border ';
        }

        if ($user['unique_id'] != $dest['unique_id']) {
            if ($user['member_until'] > date('Y-m-d H:i:s')) {
            ?>
                <a href="<?= site_url('nouveau-message/' . $dest['unique_id']); ?>" title="Envoyer un message à <?= $dest['username']; ?>" class="btn <?= $css; ?> <?= $size; ?>"><i class="fa fa-comments"></i> Message</a>
            <?php
            } else {
            ?>
                <a href="<?= site_url('tarifs'); ?>" title="Tarifs" class="btn <?= $css; ?> <?= $size; ?>"><i class="fa fa-comments"></i> Message</a>
<?php
            }
        }
    }

    static function isMember($user)
    {
        if ($user['member_until'] > date('Y-m-d H:i:s')) {
            return true;
        } else {
            return false;
        }
    }

    static function array_sort($array, $on, $order = SORT_ASC)
    {
        $new_array = array();
        $sortable_array = array();

        if (count($array) > 0) {
            foreach ($array as $k => $v) {
                if (is_array($v)) {
                    foreach ($v as $k2 => $v2) {
                        if ($k2 == $on) {
                            $sortable_array[$k] = $v2;
                        }
                    }
                } else {
                    $sortable_array[$k] = $v;
                }
            }

            switch ($order) {
                case SORT_ASC:
                    asort($sortable_array);
                    break;
                case SORT_DESC:
                    arsort($sortable_array);
                    break;
            }

            foreach ($sortable_array as $k => $v) {
                $new_array[$k] = $array[$k];
            }
        }

        return $new_array;
    }

    public static function shCurl($endpoint, $head, $params = null, $query_type = 'GET')
    {
        $api_url = 'https://albert.superhote.com/';

        //Superhote Connexion
        $curl = curl_init($api_url . $endpoint);
        curl_setopt($curl, CURLOPT_HEADER, 1);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [$head]);
        curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $query_type);

        if (!empty($params)) {
            curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($params));
        }

        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $resp = curl_exec($curl);

        $resp = trim(str_replace("HTTP/1.1 100 Continue", "", $resp));

        list($headers, $content) = preg_split("/\n\s*?\n/m", $resp, 2);

        return json_decode(trim($content), true);
    }

    public static function getFlag($code)
    {
        // return implode('', array_map(fn ($letter) => mb_chr(ord($letter) % 32 + 0x1F1E5), str_split($code)));
        return implode('', array_map(function ($letter) {
            return mb_chr(ord($letter) % 32 + 0x1F1E5);
        }, str_split($code)));
    }

    public static function isAlbertAfrica()
    {
        // Get the current host
        $host = $_SERVER['HTTP_HOST'];

        // Check if the host matches 'albertsav.africa.com'
        if ($host === 'albertsav.africa.com' || !empty(IS_MAROC)) {
            return true;
        } else {
            return false;
        }
    }

    public static function getCalendlyLink()
    {
        if (APPUP::isAlbertAfrica()) {
            return 'https://calendly.com/albertinesav212/15min';
        } else {
            return 'https://calendly.com/albertserviceclient/15min';
        }
    }

    public static function getCurrency()
    {
        if (APPUP::isAlbertAfrica()) {
            return 'MAD';
        } else {
            return '€';
        }
    }


    public static function getRefreshToken($invite_code)
    {
        ini_set('max_execution_time', 900);

        // Initialize a cURL session
        $ch = curl_init();

        // Set the URL
        curl_setopt($ch, CURLOPT_URL, 'https://api.beds24.com/v2/authentication/setup');

        // Set the HTTP request method to GET
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_HEADER, true); // Include the headers in the output

        // Set the headers
        $headers = [
            'accept: application/json',
            'code: ' . $invite_code
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Return the response instead of outputting it
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the request
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch), 400001);
        } else {
            // Separate the headers and the body
            $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $headers = substr($response, 0, $headerSize);
            $body = substr($response, $headerSize);

            // Close cURL session
            curl_close($ch);

            // Parse headers to find the x-five-min-limit-remaining value
            $headersArray = explode("\r\n", $headers);

            $limitRemaining = null;
            $time_to_wait = null;
            foreach ($headersArray as $header) {
                if (stripos($header, 'x-five-min-limit-remaining:') !== false) {
                    list(, $limitRemaining) = explode(':', $header);
                    $limitRemaining = trim($limitRemaining);
                    break;
                }
            }

            foreach ($headersArray as $header) {
                if (stripos($header, 'x-five-min-limit-resets-in:') !== false) {
                    list(, $time_to_wait) = explode(':', $header);
                    $time_to_wait = trim($time_to_wait);
                    break;
                }
            }

            if ((float) $limitRemaining <= 6) {
                sleep((int) $time_to_wait + 5);
            }

            $response = json_decode($body);

            return $response->token;
        }
    }

    public static function getAuthToken($token, $type = 'refresh')
    {
        ini_set('max_execution_time', 900);

        // Initialize a cURL session
        $ch = curl_init();

        // Set the URL
        curl_setopt($ch, CURLOPT_URL, 'https://api.beds24.com/v2/authentication/token');

        // Set the HTTP request method to GET
        curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
        curl_setopt($ch, CURLOPT_HEADER, true); // Include the headers in the output

        // Set the headers
        $headers = [
            'accept: application/json',
            'refreshToken: ' . $token
        ];
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

        // Return the response instead of outputting it
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        // Execute the request
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch), 400001);
        } else {
            // Separate the headers and the body
            $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $headers = substr($response, 0, $headerSize);
            $body = substr($response, $headerSize);

            // Close cURL session
            curl_close($ch);

            // Parse headers to find the x-five-min-limit-remaining value
            $headersArray = explode("\r\n", $headers);

            $limitRemaining = null;
            $time_to_wait = null;
            foreach ($headersArray as $header) {
                if (stripos($header, 'x-five-min-limit-remaining:') !== false) {
                    list(, $limitRemaining) = explode(':', $header);
                    $limitRemaining = trim($limitRemaining);
                    break;
                }
            }

            foreach ($headersArray as $header) {
                if (stripos($header, 'x-five-min-limit-resets-in:') !== false) {
                    list(, $time_to_wait) = explode(':', $header);
                    $time_to_wait = trim($time_to_wait);
                    break;
                }
            }

            if ((float) $limitRemaining <= 6) {
                sleep((int) $time_to_wait + 5);
            }

            $response = json_decode($body);

            if (!empty($response->token) || !empty($response->refreshToken)) {

                if ($type == 'classic') {
                    return $response->token;
                } else {
                    return $response->refreshToken;
                }
            } else {
                echo 'Impossible de récupérer les informations. Vérifiez les informations saisies pour : ' . $token . '<br><br>';
            }
        }
    }

    public static function beds24Call($endpoint, $auth_token, $params = null)
    {
        ini_set('max_execution_time', 900);

        $url = 'https://api.beds24.com/v2/' . $endpoint;

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, true); // Include the headers in the output
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'accept: application/json',
            'token: ' . $auth_token
        ));

        if (!empty($params)) {
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params)); // Include the headers in the output
        }

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            throw new Exception('Error:' . curl_error($ch), 30044);
        } else {

            // Separate the headers and the body
            $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $headers = substr($response, 0, $headerSize);
            $body = substr($response, $headerSize);

            // Close cURL session
            curl_close($ch);

            // Parse headers to find the x-five-min-limit-remaining value
            $headersArray = explode("\r\n", $headers);
            $limitRemaining = null;
            $time_to_wait = null;
            foreach ($headersArray as $header) {
                if (stripos($header, 'x-five-min-limit-remaining:') !== false) {
                    list(, $limitRemaining) = explode(':', $header);
                    $limitRemaining = trim($limitRemaining);
                    break;
                }
            }

            foreach ($headersArray as $header) {
                if (stripos($header, 'x-five-min-limit-resets-in:') !== false) {
                    list(, $time_to_wait) = explode(':', $header);
                    $time_to_wait = trim($time_to_wait);
                    break;
                }
            }

            if ($limitRemaining <= 6) {
                sleep((int) $time_to_wait + 5);
            }

            return json_decode($body);
        }

        curl_close($ch);
    }

    public static function beds24Message($auth_token, $params)
    {
        $url = 'https://api.beds24.com/v2/bookings/messages';

        $ch = curl_init($url);

        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HEADER, true); // Include the headers in the output
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            'accept: application/json',
            'token: ' . $auth_token,
            'Content-Type: application/json'
        ]);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));

        // Execute the request
        $response = curl_exec($ch);

        // Check for errors
        if (curl_errno($ch)) {
            throw new Exception(curl_error($ch), 400001);
        } else {

            // Separate the headers and the body
            $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
            $headers = substr($response, 0, $headerSize);
            $body = substr($response, $headerSize);

            // Close cURL session
            curl_close($ch);

            // Parse headers to find the x-five-min-limit-remaining value
            $headersArray = explode("\r\n", $headers);
            $limitRemaining = null;
            $time_to_wait = null;
            foreach ($headersArray as $header) {
                if (stripos($header, 'x-five-min-limit-remaining:') !== false) {
                    list(, $limitRemaining) = explode(':', $header);
                    $limitRemaining = trim($limitRemaining);
                    break;
                }
            }

            foreach ($headersArray as $header) {
                if (stripos($header, 'x-five-min-limit-resets-in:') !== false) {
                    list(, $time_to_wait) = explode(':', $header);
                    $time_to_wait = trim($time_to_wait);
                    break;
                }
            }

            if ((float) $limitRemaining <= 6) {
                sleep((int) $time_to_wait + 5);
            } else {
                sleep(2);
            }

            $response = json_decode($body);

            return $response;
        }
    }

    public static function generateSmallPersonalToken($user_id)
    {
        $randomString = uniqid(mt_rand(), true);  // Generates a random unique string
        $token = md5($user_id . $randomString);    // Combines user ID and random string, and hashes them

        return substr($token, 0, 16);             // Returns a 16-character token
    }

    public static function generateSmallPersonalHeader()
    {
        $data = random_bytes(16);
        $data[6] = chr(ord($data[6]) & 0x0f | 0x40); // Set version to 0100
        $data[8] = chr(ord($data[8]) & 0x3f | 0x80); // Set variant to 10

        return vsprintf('%s%s-%s-%s-%s-%s%s%s', str_split(bin2hex($data), 4));
    }
}
