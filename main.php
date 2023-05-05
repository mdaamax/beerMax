<?php
require "db.php";

session_start();
if (empty($_SESSION['user'])){
    header('Location: auth_form.php');
}
$list = select("SELECT * FROM topics");


?>

<a href="logout.php">Выход</a>
<a href="create_topic.php">Создать тему</a>
<div>
    <ul>
        <?php foreach ($list as $item) :?>
            <li>
                <a href="topic.php?topic_id=<?=$item['id']?>"><?=$item['title']?></a>
            </li>
        <?php endforeach;?>
    </ul>
</div>