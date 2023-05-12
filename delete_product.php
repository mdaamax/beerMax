<?php
require 'functions.php';
$productList = getProductList();


if(isset($_GET['product_id'])){
    deleteById($_GET['product_id']);
}



?>
<a href="index.php">Выход</a>
<div>
    <table>
        <tr>
            <th>|ID</th>
            <th>|категория</th>
            <th>|цена</th>
            <th>|действие</th>

        </tr>
        <?php foreach ($productList as $product) :?>
            <tr>
                <td><?=$product['id']?></td>
                <td><?=$product['title']?></td>
                <td><?=$product['price']?></td>
                <td><a href="delete_product.php?product_id=<?=$product['id']?>">Удалить</a></td>
            </tr>
        <?php endforeach;?>
    </table>
</div>