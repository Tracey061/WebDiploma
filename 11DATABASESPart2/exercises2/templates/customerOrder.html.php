<ul>
    <?php foreach ($rows as $row):
        $orderID = $row["OrderID"];
        $orderDate = $row["OrderDate"];
    ?>
    <li><a href="orders.php?id=<?= $orderID ?>"><?= $orderID ?>&&<?= $orderDate?></a></li>
    <?php endforeach; ?>
</ul> 