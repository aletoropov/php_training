<?php 
$authors  = [
    ['name' => 'Пушкин', 'email' => 'pushkin@dantesmustdie.ru', 'year' => 1799],
    ['name' => 'Гоголь', 'email' => 'gogol@gogol.ru', 'year' => 1809],
    ['name' => 'Тургенев', 'email' => 'tur@genev.ru', 'year' => 1818],
];

$books = [
    ['name' => 'Пиковая дама', 'year' => 1800, 'author' => 0],
    ['name' => 'Дубровский', 'year' => 1801, 'author' => 0],
    ['name' => 'Вий', 'year' => 1835, 'author' => 1],
    ['name' => 'Мертвые души', 'year' => 1835, 'author' => 1],
    ['name' => 'Дворянское гнездо', 'year' => 1858, 'author' => 2],
];

/**
 * Выводим список авторов.
 */
foreach ($authors as $author) {
    echo $author['name'].' - ';
    echo $author['email']. ' - ';
    echo $author['year'].'<br>';
}

echo '<hr>';

/**
 * Выводим списко книг.
 */
foreach ($books as $book) {
    echo $book['name'].' - ';
    echo $authors[$book['author']]['name'].' - ';
    echo $book['year'].'<br>';
}