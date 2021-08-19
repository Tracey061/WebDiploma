<ul>
    <?php foreach ($rows as $row):
        $orderID = $row["OrderID"];
        $orderDate = $row["OrderDate"];
    ?>
    <li><a href="orders.php?id=<?= $orderID ?>"><?= $orderID ?></a> <?= $orderDate?></li>
    <?php endforeach; ?>
</ul> 