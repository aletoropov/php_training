<?php

include('I_Pay.php');
include 'Offline.php';
include 'Online.php';

class Shop
{
    public function cardPay($sum) 
    {
        if ($sum <= 5000) {
            $payment = new Offline();
        }

        if ($sum > 5000) {
            $payment = new Online();
        }

        $payment->pay($sum);
    }
}

$shop = new Shop();
$shop->cardPay(500);
$shop->cardPay(6000);
$shop->cardPay(4000);