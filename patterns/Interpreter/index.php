<?php
/**
 * Client
 */

spl_autoload_register(static function ($class_name) {
   require __DIR__ . DIRECTORY_SEPARATOR . $class_name . '.php';
});

$divExp5 = new DivExpression(5);
$divExp7 = new DivExpression(7);
$orExp = new OrExpression($divExp5, $divExp7);
$andExp = new AndExpression($divExp5, $divExp7);

echo '21 делится на 5 или 7?: ';
$result = $orExp->interpret(21);
echo $result ? 'true' : 'false', '<br>';

echo '21 делится на 5 и 7?: ';
$result = $andExp->interpret(21);
echo  $result ? 'true' : 'false', '<br>';

echo '35 делится на 5 и 7?: ';
$result = $andExp->interpret(35);
echo $result ? 'true' : 'false', '<br>';