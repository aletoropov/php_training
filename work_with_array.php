<?php

/**
 * Функция для вывода отладочной информации в отформатированном виде
 * @param $data
 * @return void
 */
function debug($data): void
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}

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
debug($products);
$products = array_diff($products, ['']);
debug($products);

/**
 * Преобразовываем массив в JSON и обратно
 */
$cars = ['model' => 'audi', 'year' => 2023, 'speed' => 240];
$cars_json = json_encode($cars);
debug($cars_json);

$cars_array = json_decode($cars_json, true);
debug($cars_array);

/**
 * Объединение массивов
 */
$fruit = ['apple', 'lemon', 'banana'];
$vegetables = ['potato', 'cucumber', 'tomato'];
$food = array_merge($fruit, $vegetables);
debug($food);

//сортировка элментов
$numbers = [11, 23, 2, 7, 18, 39, 45, 229, 8,];

sort($numbers);
debug($numbers);

rsort($numbers);
debug($numbers);

usort($numbers, function($a, $b) {
    return $a <=> $b;
});
debug($numbers);

/**
 * Вывести имя подмассива.
 * Обход вложенного массива.
 */
$massive = [
    'submassive1'=>[
        'key1'=>'name1',
        'key2'=>'name2',
    ],
    'submassive2'=>[
        'key1'=>'name3',
        'key2'=>'name4',
    ],
    'submassive3'=>[
        'key1'=>'name5',
        'key2'=>'name6',
    ],
];

foreach ($massive as $key => $podmassive) {
    echo '<p>' . $key . '</p>';
    foreach ($podmassive as $k => $v) {
        echo $k . ' = ' . $v . '</p>' ;
    }
}

/**
 * Обход массива
 */
$num = [2, 3, 5, 7, 9, 11, 12, 15];
$str = "";
foreach ($num as $val) {
    $str .= ($str == "" ? "" : "; ") . $val;
}

echo $str;

/**
 * Поиск элемента массива
 */
$animals = ['cat', 'dog', 'leon'];
$contain = in_array('leon', $animals);
echo $contain ? "leon is here" : "leon is not";

/**
 * Получение части массива
 */
$numbers = [2, 4, 5, 6, 7, 11, 12, 23, 34];
$first_numbers = array_slice($numbers, 0, 3);
$last_numbers = array_slice($numbers, count($numbers) - 4, count($numbers));
debug($first_numbers);
debug($last_numbers);

/**
 * Получение Минимального и Максимального значения
 */
$min = min($numbers);
$max = max($numbers);
echo '<p>Минимальное число: ' .  $min . '</p>';
echo '<p>Максимальное число: ' .  $max. '</p>';

/**
 * Получение уникальных значений
 */
$numbers = [1, 2, 1, 2, 3, 3, 4, 5,];
$unique = array_unique($numbers);
debug($unique);

/**
 * Преобразование массива
 */
$numbers = [2, 4, 5, 6, 7, 8, 9, 11,];
$numbers2 = array_map(function ($n) { return $n * 2; }, $numbers);
debug($numbers2);