<?php

/**
 * Скрипт загрузки одного файла на сервер.
 *
 * @author Александр Торопов <toropovsite@yandex.ru>
 */

$uploadDir = '.' .  DIRECTORY_SEPARATOR . 'files' . DIRECTORY_SEPARATOR;

if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if (isset($_FILES['uploadFile'])) {
    $uploadFile      = $_FILES['uploadFile']['tmp_name'];
    $uploadFileName  = $_FILES['uploadFile']['name'];
    $uploadFileSize  = $_FILES['uploadFile']['size'];
    $uploadFileType  = $_FILES['uploadFile']['type'];
    $errorCode       = $_FILES['uploadFile']['error'];
    $fileInfo        = pathinfo($_FILES['uploadFile']['name']);
}

if ($errorCode == 0) {
    //выводим информацию о файле.
    echo 'Имя файла на сервере: ' . htmlspecialchars($uploadFile) . '<br>';
    echo 'Имя файла на компьютере пользователя: ' . htmlspecialchars($uploadFileName) . '<br>';
    echo 'Размер файла: ' . htmlspecialchars($uploadFileSize) . '<br>';
    echo 'MIME тип файла: ' . htmlspecialchars($uploadFileType) . '<br>';

    //дополняем и генерируем уникальное имя файла.
    do {
        $uploadFileName = $uploadDir . uniqid('upload_') . '.' . $fileInfo['extension'];
    } while(file_exists($uploadFileName));

    //перемещаем загруженный файл.
    if (move_uploaded_file($uploadFile, $uploadFileName)) {
        echo 'Файл загружен!';
    } else {
        echo $errorCode;
    }
}