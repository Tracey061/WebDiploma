<form action="buttons.php" method="post">
	<?php
	$pages = $total /5;
	for($i=1; $i<= $pages; $i++):
		?>
		<input type="submit" name="page" value="<?= $i ?>">
	<?php endfor; ?>

</form>
<p>Total number of rows: <?=  $total ?></p>
