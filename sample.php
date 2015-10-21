<?php

require('autoload.php');

use CyberSource\Model\Payment as Payment;
use CyberSource\Model\AuthCaptureRequest as AuthCaptureRequest;
use CyberSource\Model\CaptureRequest as CaptureRequest;
use CyberSource\Model\CaptureRequest as RefundRequest;


$apiKey = "put your api key here";
$sharedSecret = "put your shared secret here";

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
print_r($auth);

$cybs_captures = new CyberSource\Captures();
$capture = $cybs_captures->capture($auth->getId(), (new CaptureRequest())->setAmount(20.00));
print_r($capture);

$cybs_refunds = new CyberSource\Refunds();
$refund_request = (new RefundRequest())->setAmount(35.00);

$refund = $cybs_refunds->refundCapture($capture->getId(), $refund_request);
print_r($refund);
