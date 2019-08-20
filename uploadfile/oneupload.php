<?php

/**
 * Скрипт загрузки одного файла на сервер.
 */

$dir = './files/';

if (isset($_FILES['upfile'])) {
    $upfile      = $_FILES['upfile']['tmp_name'];
    $upfile_name = $_FILES['upfile']['name'];
    $upfile_size = $_FILES['upfile']['size'];
    $upfile_type = $_FILES['upfile']['type'];
    $error_code  = $_FILES['upfile']['error'];
}

if ($error_code == 0) {
    //выводим информацию о файле.
    echo 'Имя файла на сервере: ' . $upfile . '<br>';
    echo 'Имя файла на компьютере пользователя: ' . $upfile_name . '<br>';
    echo 'Размер файла: ' . $upfile_size . '<br>';
    echo 'MIME тип файла: ' . $upfile_type . '<br>';

    //дополняем имя файла.
    $upfile_name = $dir . $upfile_name;

    //перемещаем загруженный файл.
    move_uploaded_file($upfile, $upfile_name);
}