<ul>
    <?php foreach($rows as $row):
        $id = $row["customerID"];
        $name = $row["companyName"];
        ?>
        <li><a href="custOrders.php?id=<?= $id ?>"><?= $id ?></a> <?= $name ?></li>
    <?php endforeach; ?>
</ul>