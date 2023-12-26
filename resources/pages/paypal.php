<?php
require 'C:\xampp\htdocs\laravel\plugin_store\vendor\autoload.php'; // Include the PayPal SDK

use PayPalCheckoutSdk\Core\PayPalHttpClient;
use PayPalCheckoutSdk\Core\SandboxEnvironment;
use PayPalCheckoutSdk\Orders\OrdersCreateRequest;

$clientId = 'AT_hGGV7jJ4WnZNfl6oeqWDPDp8rW1hoqHVmNzKh9lUBRf-ijfYsC6aVt_47CiPeEwU4J4XhDCY9QrsT';
$clientSecret = 'EHCnQRggvKkPtz6NXXZcZLxy7emtJ7v7-eEP2gxnU50ad-XMMpI-Q-3lQlrT3sN27zhWLQF6RkfCQTgY';

$environment = new SandboxEnvironment($clientId, $clientSecret);
$client = new PayPalHttpClient($environment);

$request = new OrdersCreateRequest();
$request->prefer('return=representation');
$request->body = [
    "intent" => "CAPTURE",
    "purchase_units" => [[
        "amount" => [
            "currency_code" => "USD",
            "value" => "100.00"
        ]
    ]]
];

try {
    $response = $client->execute($request);
    print_r($response);
} catch (HttpException $ex) {
    echo $ex->statusCode;
    print_r($ex->getMessage());
}
?>