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
    $file = $_FILES['img'];
    if (createProduct($title, $type_id, $alc,$price,$description,$file)) {
        header('Location: index.php');
    } else {
        $error = 'Ошибка при создании темы';
    }
}

if (!empty($_FILES)){
    $type = $_FILES['myFile']['type'];
    $file = file_get_contents($_FILES['myFile']['tmp_name']);
    $file = base64_decode($file);
}

?>
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
    <form method="post" enctype="multipart/form-data">
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
        <input type="file" name="img">
        <input type="submit">
    </form>
</body>
</html>