<?php
/**
 * Пример использования класса Captcha
 *
 * @author Toropov Alexandr <toropovsite@yandex.ru>
 */
require_once 'captcha.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   if (Captcha::check($_POST['captcha'])) {
        echo 'Правильный код!';
   } else {
        echo 'Неправильный код!';
   }
}
?>

<!doctype html>
<html lang="ru">
<head>
 <meta charset="UTF-8">
 <meta name="viewport"
       content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Document</title>
</head>
<body>
  <form method="post">
    <div>
     <img src="image.php">
     <input type="text" name="captcha">
     <input type="submit" value="Отправить">
    </div>
  </form>
</body>
</html>