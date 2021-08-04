<?php if($missingFields): ?>
	<p class="error">Please supply the missing information</p>
<?php endif; ?>

<h1>Registration Form</h1>

		<p>Please fill out the details to register</p>
		
		<form action="registration.php" method="post">
		<fieldset>
			<legend>Details</legend>
			<p>
			<label for="firstName" <?= validateField("firstName",$missingFields) ?>>
			First name *
		    </label>
			<input type="text" name="firstName" id="firstName" 
			value="<?= setValue("firstName") ?>">
			</p>

			<p>
			<label for="lastName"  <?= validateField("lastName",$missingFields) ?>>
			Last name *</label>
			<input type="text" name="lastName" id="lastName" 
			value="<?= setValue("lastName") ?>">
			</p>

			<p>
			<label for="email" <?= validateField("email",$missingFields) ?>>
			Email *</label>
			<input type="email" name="email" id="email" 
			value="<?= setValue("email") ?>">
			</p>

			<p>
			<label for="phone">Phone</label>
			<input type="text" name="phone" id="phone" 
			value="<?= setValue("phone") ?>">
			</p>

			<p>
			<label <?= validateField("semester", $missingFields) ?>>
			Semester studied *</label>
		
			<label for="semester1" class="radioLabel">Semester 1</label>
			<input type="radio" name="semester" id="semester1" value="1" 
			<?= setChecked("semester","1") ?>>
			

			<label for="semester2" class="radioLabel">Semester 2</label>
			<input type="radio" name="semester" id="semester2" value="2" 
			<?= setChecked("semester","2") ?>>
			</p>

			<p>
			<label for="course">Select the course you have studied</label>

			<select name="course" id="course">
				<option value="WebCert4" <?= setSelected("course","WebCert4") ?>>Web Cert 4</option>

				<option value="WebDiploma" <?= setSelected("course","WebDiploma") ?>>Web Diploma</option>

				<option value="ProgrammingCert4" <?= setSelected("course","ProgrammingCert4") ?>>Programming Cert 4</option>
			</select>
			</p>

			<p>
			<label for="newsletter">Do you want to receive our newsletter?</label>
			<input type="checkbox" name="newsletter" id="newsletter" value="yes" 
			<?= setChecked("newsletter","yes") ?>>
			</p>

			<p>
			<label for="comments">Any comments?</label>
			<textarea name="comments" id="comments" rows="4" cols="50">
			<?= setValue("comments") ?>
			</textarea>
			</p>

		</fieldset>

			<p>
			<input type="submit" name="submitButton" id="submitButton" value="Send Details">
			<input type="reset" name="resetButton" id="resetButton" value="Reset Form">
			</p>

		</form>