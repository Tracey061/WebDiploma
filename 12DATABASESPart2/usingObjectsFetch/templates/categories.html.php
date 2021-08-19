<ul>
	<?php foreach ($rows as $row): 
		$id = $row["CategoryId"];
		$name = $row["CategoryName"];
		?>

		<li><a href="productsByCategoryLinks.php?id=<?= $id ?>"><?=  $name ?></a></li>
				
	<?php endforeach; ?>
</ul>
		
		