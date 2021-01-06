<?php
$theme_options = get_option('woocommerce_payright_gateway_settings');
$sandbox       = $theme_options['sandbox'];

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http");

if (strtolower($sandbox) == "yes") {
    define("PAYRIGHT_APIENDPOINT", "https://sandbox.payright.com/au/checkout/");

} else {
    define("PAYRIGHT_APIENDPOINT", "https://api.payright.com/au/checkout/");
}

