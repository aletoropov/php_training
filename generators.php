<?php

/**
 * Работа с генираторами.
 * 
 * @author Toropov Alexandr
 */

 function gen(int $from, int $to) {
     if ($from < 0 || $to < 0) {
         return false;
     }
     for ($i = $from; $i <= $to; $i++) {
         yield rand(1, 100);
     }
 }

foreach (gen(1, 15) as $value) {
    $arr[] = $value;
    echo $value. '<br>';
}

var_dump($arr);