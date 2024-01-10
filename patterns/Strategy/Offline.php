<?php

class Offline implements I_Pay
{
    public function pay($sum): void
    {
        echo 'Оплата Offline<br>';
    }
}