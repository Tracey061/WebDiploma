<ul>
    <?php foreach($rows as $row):
        $name = $row["productName"];
        $price = $row["unitPrice"];
        $qty = $row["quantity"];
        ?>
        <li><?= $name ?></a>  $<?= $price ?> QTY <?= $qty ?></li>
    <?php endforeach; ?>
</ul>