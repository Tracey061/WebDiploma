<table>
    <tr>
        <th><a href="sorting.php?sort=productName">Product Name</a></th>
        <th><a href="sorting.php?sort=unitPrice">Unit Price</a></th>
        <th><a href="sorting.php?sort=unitsInStock">Units In Stock</a></th>
        <th><a href="sorting.php?sort=unitsOnOrder">Units On Order</a></th>
    </tr>
<?php foreach ($rows as $row):
    $productName = $row["productName"];
    $unitPrice = sprintf("%1.2f",$row["unitPrice"]);
    $unitsInStock = $row["unitsInStock"];
    $unitsOnOrder = $row["unitsOnOrder"];
    ?>
    <tr>
        <td><?= $productName ?></td>
        <td><?= $unitPrice ?></td>
        <td><?= $unitsInStock ?></td>
        <td><?= $unitsOnOrder ?></td>
    </tr>
<?php endforeach; ?>

</table>