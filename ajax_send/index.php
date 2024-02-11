<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отправка данных с помощью AJAX запроса</title>
</head>
<body>
    <form name="send_form" method="post" action="handler.php">
        <div>
            <label>
                <input name="name" type="text">
            </label>
        </div>
        <div>
            <label>
                <input name="email" type="email">
            </label>
        </div>
        <div>
            <label>
                <textarea name="text"></textarea>
            </label>
        </div>
        <div>
            <input type="submit" value="Отправить">
        </div>
    </form>
</body>
</html>
