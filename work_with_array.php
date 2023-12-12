<?php

/**
 * Обход в цикле вложенных массивов.
 */

$arr = [[1, 2, 3], [9, 4, 5], [2, 4, 5]];

for ($i = 0; $i < count($arr); $i++) {
    for ($j = 0; $j < count($arr[$i]); $j++) {
        echo $arr[$i][$j] . '<br>';
    }
}

unset($arr);

/**
 * Ассоциативный массив.
 */
$arr = [['name' => 'Alex', 'age' => '29'], ['name' => 'Ivan', 'age' => '30']];

for($i = 0; $i < count($arr); $i++) {
    echo 'Name: ' . $arr[$i]['name'] . ' Age: ' . $arr[$i]['age'] . '<br>';
}

/**
 * Удаляем пустые элементы из массива
 */
$products = ['apple', 'kiwi', '', 'banana', ''];
var_dump($products);
$products = array_diff($products, ['']);
var_dump($products);

/**
 * Преобразовываем массив в JSON и обратно
 */
$cars = ['model' => 'audi', 'year' => 2023, 'speed' => 240];
$cars_json = json_encode($cars);
var_dump($cars_json);

$cars_array = json_decode($cars_json, true);
var_dump($cars_array);