<form action="nextAndPreviousNumbers.php" method="post" class="paging">
	<input type="hidden" name="start" value=<?= $start ?>>
	<input type="hidden" name="total" value=<?= $total ?>>

	<?php 
	if ($start >= 5): ?>
		<button type="submit" name="prev">&lt;</button>
		
	<?php endif;
	for($i=1; $i<=$pages; $i++): ?>
		<button type="submit" name="page" value="<?= $i ?>"><?= $i ?></button>
	<?php endfor; 
	if ($total > ($start + 5)): ?>
		<button type="submit" name="next">&gt;</button>
	<?php endif; ?>



</form>
<p>Total number of rows: <?=  $total ?></p>