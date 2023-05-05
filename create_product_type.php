<?php
require 'functions.php';
session_start();
if (empty($_SESSION['user']['is_admin'])) {
    header('Location: auth_form.php');
}
$error = '';
if (!empty($_POST['name'])

) {
    $title = $_POST['name'];

    if (createProductType($title)) {
        header('Location: index.php');
    } else {
        $error = 'Ошибка при создании типа продукта';
    }
}
?>

<form method="post">
    <label> Тип товара </label>
    <input type="text" name="name">
    <br>
    <input type="submit">
</form>