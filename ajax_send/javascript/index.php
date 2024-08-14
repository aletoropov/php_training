<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Отправка данных черех AJAX на JavaScript</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Отправка данных через AJAX с помощью JavaScript</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <form name="send_form">
                    <div class="mb-3">
                        <label for="uEmail" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="uEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="uName" class="form-label">Name:</label>
                        <input type="password" class="form-control" id="uName">
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
