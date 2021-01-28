<?php

$email = $_POST["email"];
$message = $_POST["message"];
$error = '';
if (trim($email) == '')
    $error = 'Введите ваш email';
else if (trim($message) == '')
    $error = 'Введите ваше сообщение';
if ($error != '') {
    echo $error;
    exit;
}


header('Location: about.php');
?>
