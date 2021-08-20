<ul>
    <?php foreach($rows as $row):
        $id = $row["orderId"];
        $date = $row["orderDate"];
        ?>
        <li><a href="orders.php?id=<?= $id ?>"><?= $id ?></a> - <?= $date ?></li>
    <?php endforeach; ?>
</ul>