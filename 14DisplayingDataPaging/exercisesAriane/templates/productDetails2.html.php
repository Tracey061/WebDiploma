<h2>Displaying 5 products from row <?= $start+1 ?></h2> 
<?php foreach ($rows as $row): 
	$productId = $row["productId"];
	$productName = $row["productName"];
	$unitPrice = sprintf("%1.2f", $row["unitPrice"]);
	$unitsInStock = $row["unitsInStock"];
	
	?>
	<div class="product">
		<p><strong>Product Id: <?= $productId ?></strong></p>
		<p><?= $productName ?> $<?= $unitPrice ?></p>
		<p>Units In Stock : <?= $unitsInStock ?></p>
	</div>
<?php endforeach; ?>
