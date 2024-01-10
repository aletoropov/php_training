<?php

spl_autoload_register(static function ($class_name) {
    require __DIR__ . DIRECTORY_SEPARATOR . $class_name . '.php';
});

class Shop
{
    public function cardPay($sum): void
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