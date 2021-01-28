<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php require "header.php" ?>
<div class="container mt-4">
    <h1>Форма регисрации</h1>
    <form action="post.php" method="post">
        <input type="text" class="'form-control" name="login" id="login" placeholder="Введите логин"><br><br>
        <input type="text" class="'form-control" name="name" id="name" placeholder="Введите имя"><br><br>
        <input type="text" class="'form-control" name="password" id="password" placeholder="Введите пароль"><br><br>
        <button class="btn btn-success" type="submit">Регистрация</button>
    </form>
</div>




<?php require "footer.php" ?>
</body>
</html>