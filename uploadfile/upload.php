<?php

/**
 * Скрипт загрузки одного файла на сервер.
 */

$uploadDir = '.' .  DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR;

if (isset($_FILES['uploadFile'])) {
    $uploadFile      = $_FILES['uploadFile']['tmp_name'];
    $uploadFileName  = $_FILES['uploadFile']['name'];
    $uploadFileSize  = $_FILES['uploadFile']['size'];
    $uploadFileType  = $_FILES['uploadFile']['type'];
    $errorCode       = $_FILES['uploadFile']['error'];
}

if ($errorCode == 0) {
    //выводим информацию о файле.
    echo 'Имя файла на сервере: ' . htmlspecialchars($uploadFile) . '<br>';
    echo 'Имя файла на компьютере пользователя: ' . htmlspecialchars($uploadFileName) . '<br>';
    echo 'Размер файла: ' . htmlspecialchars($uploadFileSize) . '<br>';
    echo 'MIME тип файла: ' . htmlspecialchars($uploadFileType) . '<br>';

    //дополняем имя файла.
    $uploadFileName = $uploadDir . $uploadFileName;

    //перемещаем загруженный файл.
    move_uploaded_file($uploadFile, $uploadFileName);
}