<ul>
    <?php foreach ($rows as $row):
        $productName = $row["ProductName"];
        $quantity = $row["Quantity"];
        $unitPrice = $row["UnitPrice"];
    ?>
    <li><?= $productName ?> <?= $quantity ?> <?= $unitPrice?></li>
    <?php endforeach; ?>
</ul>