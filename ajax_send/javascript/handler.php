<?php
/**
 * Обработка полученных данных
 */

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    foreach ($_POST as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
} else {
    header('Location: index.php');
    exit();
}