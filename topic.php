<?php
require_once 'db.php';
require 'functions.php';
$topic_id = $_GET['topic_id'];

session_start();
if (empty($_SESSION['user'])){
    header('Location: auth_form.php');
}

if (!empty($_POST['textMessage'])) {
    $textMessage = $_POST['textMessage'];
    createMessage($textMessage, $_SESSION['user']['id'], $topic_id);
}


$list = select("SELECT m.text, m.datetime, u.login FROM messages as m
                    LEFT JOIN users u ON u.id = m.user_id
                    WHERE m.topic_id = :topic ORDER BY m.datetime ASC",[
    'topic' => $topic_id
]);
?>
<a href="main.php">На главную</a>
<div>
    <ul>
        <?php foreach ($list as $item) :?>
            <li>
                <?=$item['login']?>:<br>
                <?=$item['text']?><br>
                <?=date('H:i d.m.Y', strtotime($item['datetime']))?>
            </li>
            <hr>
        <?php endforeach;?>
    </ul>
    <form method="post">
        <label> Комментарий: </label>
        <input type="hidden" value="<?=$topic_id?>">
        <textarea name="textMessage"></textarea>
        <input type="submit">
    </form>
</div>