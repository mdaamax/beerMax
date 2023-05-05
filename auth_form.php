<?php
require 'functions.php';
$errorMessage = '';
session_start();
if (!empty($_SESSION['user'])) {
    header('Location: main.php');
}
if (!empty($_POST['username'])
    && !empty($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = login($username, $password);
    if ($result['result']) {
        $_SESSION['user']['username'] = $username;
        $_SESSION['user']['id'] = $result['user']['id'];
        $_SESSION['user']['is_admin'] = $result['user']['is_admin'];
        header('Location: index.php');
    } else {
        $errorMessage = 'Неправильный логин или пароль';
    }
}
?>
<!--<form method="post">-->
<!--    <label> имя </label>-->
<!--    <input type="text" name="username">-->
<!--    <br>-->
<!--    <label> пароль </label>-->
<!--    <input type="password" name="password">-->
<!--    <br>-->
<!--    <input type="submit">-->
<!--    <div>-->
<!--        <b style="color: crimson">-->
<!--            --><?php //=$errorMessage?>
<!--        </b>-->
<!--    </div>-->
<!--</form>-->
<!--<a href="register_form.php">Регистрация</a>-->

<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BEERMAX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
</head>
<body>
<section class="thank_you">

    <form method="post" class="container-fluid text-center">
        <div class="why_shoose_us">
            <div class="heading-content text-center">
                <h1><strong>Логин</strong></h1>
            </div>
        </div>
        <div class="container overflow-hidden text-center">
            <div class="mb-5">
                <input type="text" name="username" class="form-control" id="exampleFormControlInput1" placeholder="login">
            </div>
        </div>
        <!--        <div class="container overflow-hidden text-center">-->
        <!--            <div class="mb-5">-->
        <!--                <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="e-mail">-->
        <!--            </div>-->
        <!--        </div>-->
        <div class="container overflow-hidden text-center">
            <div class="mb-5">
                <input type="text" name="password" class="form-control" id="exampleFormControlInput1" placeholder="password">
            </div>
        </div>
        <input type="submit">
        <div>
            <b style="color: crimson">
                <?=$errorMessage?>
            </b>
        </div>
        <div class="more">
            <a href="register_form.php" class="link-dark"><strong>Регистрация</strong></a>
        </div>
    </form>

</section>
</body>
</html>