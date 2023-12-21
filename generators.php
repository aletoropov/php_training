<?php

/**
 * Работа с генераторами.
 * При использовании генираторов - в памяти хранится только одно число.
 * 
 * @author Toropov Alexandr
 */

function getGen(int $from, int $to): bool|Generator
{
    if ($from < 0 || $to < 0) {
        return false;
    }
    for ($i = $from; $i <= $to; $i++) {
        yield rand(1, 100);
    }
}

foreach (getGen(1, 15) as $value) {
    $arr[] = $value;
    echo $value. '<br>';
}

var_dump($arr);

function tenNumbers(): Generator
{
    for ($i = 1; $i <= 10; $i++) {
        yield $i;
    }
}

foreach (tenNumbers() as $n) {
    echo $n;
}