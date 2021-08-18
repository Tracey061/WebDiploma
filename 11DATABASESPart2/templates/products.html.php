<h2><?= $categoryName ?></h2>

<ul>
    <?php foreach ($rows as $row):
        $productName = $row["productName"];
        $unitPrice = sprintf("%1.2f",$row["unitPrice"]);
    ?>
    <li><?= $productName ?> <?= $unitPrice ?></li>
    <?php endforeach; ?>
</ul>