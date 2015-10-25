<?php

require('autoload.php');

use CyberSource\Model\Payment as Payment;
use CyberSource\Model\AuthCaptureRequest as AuthCaptureRequest;


$apiKey = "my_api_key";
$sharedSecret = "my_secret_key";

CyberSource\Configuration::setApiKey($apiKey);
CyberSource\Configuration::setSharedSecret($sharedSecret);

$cybs_sales = new CyberSource\Sales();

$payment = new Payment();
$payment->setEncryptedData('my visa checkout encrypted data')
        ->setEncryptedKey('my encrypted key');

$request = new AuthCaptureRequest();
$request->setAmount(5.99)
        ->setCurrency('USD')
        ->setPaymentSolution("visacheckout")
        ->setPayment($payment);
$sale = $cybs_sales->sale($request);

print("Sale result:\n");
print_r($sale);
