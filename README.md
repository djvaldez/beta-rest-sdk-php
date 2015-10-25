# beta-rest-sdk-php
Proof-of-Concept PHP client bindings for the CyberSource REST API

*** DO NOT USE FOR PRODUCTION, OR EVEN THINK ABOUT IT :-)  **

##Packagist
The cybersource/sdk-php is available at [Packagist](https://packagist.org/packages/cybersource/beta-rest-sdk-php).
If you want to install SDK from Packagist,add the following dependency to your application's 'composer.json'.

    "require": {
    "cybersource/beta-rest-sdk-php": "*"
     }, 

##Prerequisites

- PHP 5.3 or above
   - [curl](http://php.net/manual/en/book.curl.php), [openssl](http://php.net/manual/en/book.openssl.php)

##Getting Started
All you need to do to get started is set your API key and shared secret key in the configuration:
````php
CyberSource\Configuration::setApiKey($apiKey);
CyberSource\Configuration::setSharedSecret($sharedSecret);
```

###Basic Examples
Samples are included which you can run from the project home directory. Here's how you can run a simple sale:

```php
use CyberSource\Model\Payment as Payment;

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
```
Running an auth and then a capture is similar:
```php
$cybs_auth = new \CyberSource\Authorizations();
$request = new AuthCaptureRequest();
$request->setAmount(50.00)
        ->setCurrency('USD')
        ->setPayment($payment);

$auth = $cybs_auth->authorizePayment($request);

$cybs_captures = new CyberSource\Captures();
$capture = $cybs_captures->capture($auth->getId(), (new CaptureRequest())->setAmount(15.00));
```

Later you can retrieve the authorization by ID:
```php
$auth = (new \CyberSource\Authorizations())->findAuthorization($id);
```

You can refund a capture too:
```php
$cybs_refunds = new CyberSource\Refunds();
$refund_request = (new RefundRequest())->setAmount(5.00);
$refund = $cybs_refunds->refundCapture($capture->getId(), $refund_request);
```

###Using Visa Checkout
If you're account is configured to use Apple Pay, include in the encrypted data of your payment, and set your payment solution to "001".
```php
use CyberSource\Model\Payment as Payment;

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
```

###Using Apple Pay
If you're account is configured to use Apple Pay, include in the encrypted data of your payment, and set your payment solution to "001".
```php
use CyberSource\Model\Payment as Payment;

$cybs_auth = new \CyberSource\Authorizations();

$payment = new Payment();
$payment->setCardNumber('4111111111111111')
        ->setCardExpirationMonth('10')
        ->setCardExpirationYear('2016')
        ->setEncryptedData($your_encrypted_data)
        ->setEncryptedDescriptor($your_descriptor)
        ->setEncryptedEncoding("Base64");

$request = new AuthCaptureRequest();
$request->setAmount(5.99)
        ->setCurrency('USD')
        ->setPaymentSolution("001")
        ->setPayment($payment);
```
