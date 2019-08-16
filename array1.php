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

//ассоциативный массив.
$arr = [['name' => 'Alex', 'age' => '29'], ['name' => 'Ivan', 'age' => '30']];

for($i = 0; $i < count($arr); $i++) {
    echo 'Name: ' . $arr[$i]['name'] . ' Age: ' . $arr[$i]['age'] . '<br>';
}