<?php

require('autoload.php');

use CyberSource\Model\Payment as Payment;
use CyberSource\Model\AuthCaptureRequest as AuthCaptureRequest;


$apiKey = "my_api_key";
$sharedSecret = "my_secret_key";

CyberSource\Configuration::setApiKey($apiKey);
CyberSource\Configuration::setSharedSecret($sharedSecret);

$cybs_auth = new \CyberSource\Authorizations();

$payment = new Payment();
$payment->setCardNumber('4111111111111111')
        ->setCardExpirationMonth('10')
        ->setCardExpirationYear('2016');

$request = new AuthCaptureRequest();
$request->setAmount(5.99)
        ->setCurrency('USD')
        ->setPayment($payment);

$cybs_sales = new CyberSource\Sales();
$sale = $cybs_sales->sale($request);

print("Sale result:\n");
print_r($sale);
