<?php

require('autoload.php');

use CyberSource\Model\Payment as Payment;
use CyberSource\Model\AuthCaptureRequest as AuthCaptureRequest;
use CyberSource\Model\CaptureRequest as CaptureRequest;


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
$request->setAmount(20.9)
        ->setCurrency('USD')
        ->setPayment($payment);

$auth = $cybs_auth->authorizePayment($request);
print("Auth result:\n");
print_r($auth);

$cybs_captures = new CyberSource\Captures();
$capture = $cybs_captures->capture($auth->getId(), (new CaptureRequest())->setAmount(20.00));
$capture = $cybs_captures->getCapture($capture->getId());
print("Capture result:\n");
print_r($capture);
