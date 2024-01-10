<?php

class Online implements I_Pay
{
    public function pay($sum): void
    {
        echo 'Оплата Online<br>';
    }
}