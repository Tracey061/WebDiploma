<form action="employeesEx1.php" method="post">
	<input type="hidden" name="start" value=<?= $start ?>>
	<input type="hidden" name="total" value=<?= $total ?>>

	<?php 
	if ($start > 0): ?>
		<input type="submit" name="prev" value="<">
	<?php endif;
	if ($total > ($start + 5)): ?>
		<input type="submit" name="next" value=">">
	<?php endif; ?>

</form>
<p>Total number of rows: <?=  $total ?></p>