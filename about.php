<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Контактная форма</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-5">
        <h3>Контактная форма</h3>
        <form action="check.php" method="post">
            <input class = "form-control" type="email" name="email" placeholder="Введите Email" ><br>
            <textarea class="form-control" name = "message" placeholder="Введите ваше сообщение"></textarea><br>
            <button class="btn btn-success" type="submit" name="send">Отправить</button>
        </form>
    </div>

</body>
</html>