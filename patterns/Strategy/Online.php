<?php

class Online implements I_Pay
{
    public function pay($sum)
    {
        echo 'Оплата Online<br>';
    }
}