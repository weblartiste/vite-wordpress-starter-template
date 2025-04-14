<?php
// MAILJET SAMPLE IMPROT AUTOLOAD DEMO
require_once get_template_directory() . '/../vendor/autoload.php';
use \Mailjet\Resources;

global $mj;
$mj = new \Mailjet\Client(MJ_APIKEY_PUBLIC, MJ_APIKEY_PRIVATE);

// AJAX DEMO
function set_optin_mailjet() {
    global $mj;

    $response = [
        'status'  => 200,
        'error'  => false,
        'response'  => __( 'Owh yeah', 'blank')
    ];

    die(json_encode($response));

}

add_action('wp_ajax_set_optin_mailjet', 'set_optin_mailjet');
add_action('wp_ajax_nopriv_set_optin_mailjet', 'set_optin_mailjet');