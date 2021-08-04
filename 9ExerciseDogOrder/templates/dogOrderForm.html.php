<?php if($missingFields): ?>
    <p class="error">Please supply the missing information</p>
<?php endif; ?>

<h1>Dog Order Form</h1>
    <p>Please fill out the details to order your puppy</p>
		
    <form action="dogOrder.php" method="post">
		<fieldset>
			<legend>Details</legend>
			<p>
			<label for="Name" <?= validateField("Name",$missingFields) ?>>
			Name *
		    </label>
			<input type="text" name="Name" id="Name" value="<?= setValue("Name") ?>">
			</p>

			<p>
			<label for="Address"  <?= validateField("Address",$missingFields) ?>>
			Address *</label>
			<input type="text" name="Address" id="Address" value="<?= setValue("Address") ?>">
			</p>

			<p>
			<label <?= validateField("Gender", $missingFields) ?>>
			Gender *</label>
		
			<label for="GenderF" class="radioLabel">Female</label>
			<input type="radio" name="Gender" id="GenderF" value="Female" 
			<?= setChecked("Gender","Female") ?>>
			

			<label for="GenderM" class="radioLabel">Male</label>
			<input type="radio" name="Gender" id="GenderM" value="Male" 
			<?= setChecked("Gender","Male") ?>>
			</p>

			<p>
			<label for="breed">Select the Breed</label>

			<select name="breed" id="breed">
				<option value="Cavoodle" <?= setSelected("breed","Cavoodle") ?>>Cavoodle</option>

				<option value="Moodle" <?= setSelected("breed","Moodle") ?>>Moodle</option>

				<option value="Schnoodle" <?= setSelected("breed","Schnoodle") ?>>Schnoodle</option>
			</select>
			</p>
		</fieldset>

			<p>
			<input type="submit" name="submitButton" id="submitButton" value="Send Details">
			<input type="reset" name="resetButton" id="resetButton" value="Reset Form">
			</p>
