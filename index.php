<?php

require_once('./Class/Paypal/paiment.php');
require_once('./Class/Stripe/paiment.php');
require_once('./Class/Users/User.php');

spl_autoload_register(function($class){
    $path= dirname(__DIR__).'/'.str_replace('\\','/',$class) .'.php';
    var_dump($path);
    if(file_exists($path)){
        require $path;
    }
});

use Stripe\Payment ;
use Paypal\Payment as PaymentPaypal;
$paymentPaypal = new PaymentPaypal();
$paymentStripe = new Payment();
var_dump($paymentPaypal,$paymentStripe);