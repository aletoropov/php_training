<?php
/**
 * Сканер открытых портов на PHP
 */


//устанавливаем лимит времени, что бы скрипт не завершал работу
ini_set('max_execution_time', 60*60);

$host_ip = (string) '127.0.0.1';

for($i = 1; $i <= 100; $i++) {
   $socket = socket_create(AF_INET, SOCK_STREAM, 0);
   $res = @socket_connect($socket, $host_ip, $i);
    if ($res) {
        echo 'Порт открыт: ' . $i . '<br>';
    }
}