<?php
require 'functions.php';
session_start();
if (empty($_SESSION['user']['is_admin'])) {
    header('Location: auth_form.php');
}
$types = getProductTypes();
$error = '';
if (!empty($_POST['title'])
    && !empty($_POST['type_id'])
    && !empty($_POST['alc'])
    && !empty($_POST['price'])
) {
    $title = $_POST['title'];
    $type_id = $_POST['type_id'];
    $alc = $_POST['alc'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    if (createProduct($title, $type_id, $alc,$price,$description)) {
        header('Location: index.php');
    } else {
        $error = 'Ошибка при создании темы';
    }
}
?>

<form method="post">
    <label> Название товара </label>
    <input type="text" name="title">
    <br>
    <label> тип товара </label>
    <select name="type_id">
        <?php foreach ($types as $type):?>
            <option value="<?=$type['id'] ?>"><?=$type['name'] ?> </option>
        <?php endforeach;?>
    </select>
    <label> содержание алк </label>
    <input name="alc" type="number">
    <label> цена </label>
    <input name="price" type="number">
    <label> Описание: </label>
    <textarea name="description"></textarea>
    <br>
    <input type="submit">
</form>