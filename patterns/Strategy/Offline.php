<?php

class Offline implements I_Pay
{
    public function pay($sum)
    {
        echo 'Оплата Offline<br>';
    }
}