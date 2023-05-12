<?php
require 'functions.php';
$productList = getProductList()

?>
<a href="logout.php">Выход</a>
<div>
    <table>
        <tr>
            <th>ID</th>
            <th>категория</th>
            <th>описание</th>
            <th>цена</th>
            <th>количество</th>
            <th>действие</th>

        </tr>
        <?php foreach ($productList as $product) :?>
            <tr>
                <td><?=$product['id']?></td>
                <td><?=$product['title']?></td>
                <td><?=$product['price']?></td>
                <td><a href="product.php?product_id=<?=$product['id']?>">Удалить</a></td>
            </tr>
        <?php endforeach;?>
    </table>
</div>