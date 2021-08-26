<?php foreach ($rows as $row): 

	
	//check if the image file exists
    if (file_exists("images/".$row["photoPath"]) && strlen($row["photoPath"]) > 0)
	{
		$photoPath = "images/" .$row["photoPath"];
	}
	else
	{
		//set up the generic image file
		$photoPath = "images/unavailable.gif";

	}

	//$photoPath = "images/" . $row["photoPath"];
	$firstName = $row["firstName"];
	$lastName = $row["lastName"];
	$hireDate = new DateTime($row["hireDate"]);
	$birthDate = new DateTime($row["birthDate"]);
	$notes = $row["notes"];
	?>

	<article>
		
		<img class="photo" src="<?= $photoPath ?>" alt="Photo of employee">

		<div class="employeeDetails">
			<h3>Personal Details</h3>
			<p><?= $firstName  . " " . $lastName ?></p>
			<p>Date of birth: <?= $birthDate->format("d-m-Y") ?></p>
			<h3>Company Details</h3>
			<p>Date hired: <?= $hireDate->format("d-m-Y") ?></p>
			<h3>Notes</h3>
			<p><?= $notes ?></p>
		</div>
	</article>
			
<?php endforeach; ?>
