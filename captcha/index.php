<?php
/**
 * Пример использования класса Captcha
 *
 * @author Toropov Alexandr <toropovsite@yandex.ru>
 */
require_once __DIR__ . DIRECTORY_SEPARATOR . 'Captcha.php';

?>

<!doctype html>
<html lang="ru">
<head>
 <meta charset="UTF-8">
 <meta name="viewport"
       content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <title>Проверка кода Captcha</title>
</head>
<body>
  <form method="post">
    <div style="max-width: 300px; margin: 10px auto; text-align: center; font-weight: bold;">

        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (Captcha::check($_POST['captcha'])) {
                echo '<div style="color: green; margin: 5px;">Правильный код!</div>';
            } else {
                echo '<div style="color: red; margin: 5px;">Неправильный код!</div>';
            }
        }
        ?>

     <div>
         <img src="image.php" alt="">
     </div>
        <label>
            <input type="text" name="captcha">
        </label>
        <div style="margin: 20px;">
            <input type="submit" value="Отправить">
        </div>
    </div>
  </form>
</body>
</html>