<?php
/**
 * Скрипт обработки данных полученных POST запросом
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $key => $val) {
        echo $key . '=>' . $val . '<br>';
    }
} else {
    header('Location: /');
    exit();
}