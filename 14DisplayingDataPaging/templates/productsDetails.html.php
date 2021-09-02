<!-- <h2>Displaying 5 Products from row <?= $start+1 ?></h2> -->
<?php foreach ($rows as $row):
    $productId = $row["productId"];
    $productName = $row["productName"];
    $unitPrice = sprintf("%1.2f",$row["unitPrice"]); 
    $unitsInStock = $row["unitsInStock"];
    ?>
    <div>
        <hr>
        <h2><strong>Product Id: <?= $productId ?></strong></h2>
        <p><?= $productName ?> <?= $unitPrice ?></p>
        <p>Units In Stock : <?= $unitsInStock ?></p>
    </div>
<?php endforeach ?>