<?php

use CRM\b24\Bitrix24;

require __DIR__ . '/Bitrix24.php';

$b24 = new Bitrix24();

// Отравка в Битрикс24: формируем URL, на который будем отправлять запрос
$queryURL = "https://[url].bitrix24.ru/rest/[id]/[key]/crm.lead.add.json";
$name     = 'Aлександр';
$phone    = '+7999999999';

// Формируем параметры для создания лида
$queryData = http_build_query(array(
    "fields" => [
        "TITLE" => "Лид с лендинга", // название лида
        "NAME" => $name,             // имя
        "STATUS_ID" => "NEW",
        "SOURCE_ID" => "WEB",
        "ASSIGNED_BY_ID" => 9,       // ответственный менеджер за лид (можно пропустить)
        "PHONE" => [                 // телефон в Битрикс24 = массив, поэтому даже если передаем 1 номер, то передаем его в таком формате
            "n0" => [
                "VALUE" => $phone,        // номер лида
                "VALUE_TYPE" => "MOBILE", // тип номера = мобильный
            ],
        ],
    ],
    "params" => ["REGISTER_SONET_EVENT" => "Y"], // Y = произвести регистрацию события добавления лида в живой ленте. Дополнительно будет отправлено уведомление ответственному за лид.
));

$b24->addLead($queryURL, $queryData);