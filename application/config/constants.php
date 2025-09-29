<?php
defined('BASEPATH') or exit('No direct script access allowed');

defined('IS_MAROC') or define('IS_MAROC', false);
defined('WS_URL') or define('WS_URL', 'https://api.albertsav.com');
defined('JWT_KEY') or define('JWT_KEY', getenv('JWT_KEY'));

//STRIPE TEST
// defined('STRIPE_PK') or define('STRIPE_PK', 'pk_test_51NEglfJdLRveMDLtpslWFykFG51ndhXsffn321PCzbd2IJSxgoAqlwRcRrtE1Fa3FSHZBvnvgsoqej18jHMpPftZ00ch8MvudQ');
// defined('STRIPE_SK') or define('STRIPE_SK', 'sk_test_51NEglfJdLRveMDLtvljonhouBEEYxiqWJJ8wLXjUHNgtQaVZFVi670CZZpkk1NTGsPREAlwK0SR4ReS2aMoDkf0n003prHd8ZU');

// defined('WHSEC') or define('WHSEC', 'whsec_R9boa3zVLZyz0dpmCvY2xQ8U76ODsPeL');
// defined('WHSECUK') or define('WHSECUK', 'whsec_R9boa3zVLZyz0dpmCvY2xQ8U76ODsPeL');

//Order : Guide, Chat, Premium
// defined('BASE_PROD_IDS') or define('BASE_PROD_IDS', ['prod_ORFe4xUNpMWhcq', 'prod_ORFdnwz0KJsHxp', 'prod_ORFdYffZzm63Rz']);
// defined('PRICES_LIST') or define('PRICES_LIST', ['price_1NeN9GJdLRveMDLtRWJaazAk', 'price_1NeN8AJdLRveMDLtoyJ3ypPa', 'price_1NeN7nJdLRveMDLttc59USXI']);




// REVOLUT LIVE
defined('REVOLUT_BASE_URL') or define('REVOLUT_BASE_URL', 'https://merchant.revolut.com');
defined('REVOLUT_API_VERSION') or define('REVOLUT_API_VERSION', '2024-09-01');
defined('REVOLUT_SK') or define('REVOLUT_SK', getenv('REVOLUT_SK'));
defined('REVOLUT_PK') or define('REVOLUT_PK', getenv('REVOLUT_PK'));


// REVOLUT SANDBOX
// defined('REVOLUT_BASE_URL') or define('REVOLUT_BASE_URL', 'https://sandbox-merchant.revolut.com');
// defined('REVOLUT_API_VERSION') or define('REVOLUT_API_VERSION', '2024-09-01');





//STRIPE LIVE

defined('STRIPE_SK') or define('STRIPE_SK', getenv('STRIPE_SK'));
defined('STRIPE_PK') or define('STRIPE_PK', getenv('STRIPE_PK'));

defined('WHSEC') or define('WHSEC', getenv('WHSEC'));
defined('WHSECUK') or define('WHSECUK', 'whsec_0gfeCuQe3okR75sUpLC6MLHNcK6MjNSK');

// Order : Guide, Chat, Premium
// defined('BASE_PROD_IDS') or define('BASE_PROD_IDS', ['prod_ORFcQzCPPmLRDr', 'prod_ORFbc8cDfNazP2', 'prod_OBBEVVUrC1ZnEy']);

$host = $_SERVER['HTTP_HOST'];

// Check if the host matches 'albertsav.africa.com'
if ($host === 'albertsav.africa.com' || !empty(IS_MAROC)) {

    defined('BASE_PROD_IDS') or define('BASE_PROD_IDS', ['prod_ORFcQzCPPmLRDr', 'prod_R4QrHAJKgMOUJ7']);
    // defined('PRICES_LIST') or define('PRICES_LIST', ['price_1NeN7JJdLRveMDLtr4AKfLL0', 'price_1NeN6cJdLRveMDLtRATqMhYy', 'price_1NPQMOJdLRveMDLtU0TLleER']);
    defined('PRICES_LIST') or define('PRICES_LIST', ['price_1NeN7JJdLRveMDLtr4AKfLL0', 'price_1QCISdJdLRveMDLtLtXMq3RB']);
} else {
    defined('BASE_PROD_IDS') or define('BASE_PROD_IDS', ['prod_ORFcQzCPPmLRDr', 'prod_OBBEVVUrC1ZnEy']);
    // defined('PRICES_LIST') or define('PRICES_LIST', ['price_1NeN7JJdLRveMDLtr4AKfLL0', 'price_1NeN6cJdLRveMDLtRATqMhYy', 'price_1NPQMOJdLRveMDLtU0TLleER']);
    defined('PRICES_LIST') or define('PRICES_LIST', ['price_1NeN7JJdLRveMDLtr4AKfLL0', 'price_1NPQMOJdLRveMDLtU0TLleER']);
}


defined('EXTRA_PRICE_ID') or define('EXTRA_PRICE_ID', 'price_1OoO9vJdLRveMDLttZ7WMeZj');

defined('CONTACT_MAIL') or define('CONTACT_MAIL', 'albertsavfr@yahoo.com');
defined('SH_AUTH') or define('SH_AUTH', getenv('SH_AUTH'));

defined('ADMIN_BASIC') or define('ADMIN_BASIC', getenv('ADMIN_BASIC'));


/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') or define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  or define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') or define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   or define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  or define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           or define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     or define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       or define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  or define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   or define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              or define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            or define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       or define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        or define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          or define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         or define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   or define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  or define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') or define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     or define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       or define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      or define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      or define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code