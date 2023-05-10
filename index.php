<?php

// require_once('./Class/Paypal/paiment.php');
// require_once('./Class/Stripe/paiment.php');

spl_autoload_register(function($class){
    $path= dirname(__DIR__).'/'.str_replace('\\','/',$class) .'.php';
    var_dump($path);
    if(file_exists($path)){
        require $path;
    }
});

use Paypal\Payment;

// $paymentPaypal = new PaymentPaypal();
$paymentStripe = new Payment();