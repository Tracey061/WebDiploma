<table>
	<tr>
		<th><a href="sortingEx4.php?sort=customerId">ID</a></th>
		<th><a href="sortingEx4.php?sort=companyName">Company</a></th>
		<th><a href="sortingEx4.php?sort=contactName">Contact</a></th>
	</tr>
<?php foreach ($rows as $row): 
	
	$customerId = $row["customerId"];
	$companyName = $row["companyName"];
	$contactName = $row["contactName"];
	
	?>
	<tr>
		<td><?= $customerId?></td>
		<td><?= $companyName?></td>
		<td><?= $contactName?></td>
	</tr>
<?php endforeach; ?>
</table>