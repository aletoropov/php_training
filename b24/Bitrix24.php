<?php

namespace b24;

class Bitrix24
{
    public function addLead(string $queryURL, array $queryData)
    {
        // Отправляем запрос в Битрикс24 и обрабатываем ответ
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_SSL_VERIFYPEER => 0,
            CURLOPT_POST => 1,
            CURLOPT_HEADER => 0,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_URL => $queryURL,
            CURLOPT_POSTFIELDS => $queryData,
        ]);
        $result = curl_exec($curl);
        curl_close($curl);
        $result = json_decode($result, 1);

        // Если произошла какая-то ошибка - выведем её
        if (array_key_exists('error', $result)) {
            //echo 'Ошибка при сохранении лида: ' . $result['error_description'];
            return false;
        }
        // Успешное создание лида в Битрикс24
        return true;
    }
}