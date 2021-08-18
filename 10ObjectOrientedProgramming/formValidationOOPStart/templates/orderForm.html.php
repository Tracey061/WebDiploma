<?php if($form->valid == false): ?>
	<p class="error">Please supply the missing information</p>
<?php endif; ?>

<h1>Dog Order Form</h1>

<p>Please fill out the details to order your puppy</p>

<form action="dogOrder.php" method="post" novalidate>
<fieldset>
	<legend>Details</legend>
	<p>
		<label for="name" <?= $form->setErrorClass("name") ?>>Name *</label>
		<input type="text" name="name" id="name" value="<?= $form->setValue("name") ?>"> 
		<span class="message"><?= $nameMessage ?></span>
	</p>

	<p>
		<label for="address" <?= $form->setErrorClass("address") ?>>Address *</label>
		<input type="text" name="address" id="address" value="<?= $form->setValue("address") ?>"> 
		<span class="message"><?= $addressMessage ?></span>
	</p>

	<p>
		<label for="email" <?= $form->setErrorClass("email") ?>>Email *</label>
		<input type="email" name="email" id="email" value="<?= $form->setValue("email") ?>"> 
		<span class="message"><?= $emailMessage ?></span>
	</p>

	<p>
		<label for="phone" <?= $form->setErrorClass("phone") ?>>Phone *</label>
		<input type="text" name="phone" id="phone" value="<?= $form->setValue("phone") ?>"> 
		<span class="message"><?= $phoneMessage ?></span>
	</p>

	<p>
		<label <?= $form->setErrorClass("gender") ?>>Gender *</label>

		<label for="female" class="radioLabel">Female</label>
		<input type="radio" name="gender" id="female" value="F" <?= $form->setSelected("gender","F") ?>>
		

		<label for="male" class="radioLabel">Male</label>
		<input type="radio" name="gender" id="male" value="M" <?= $form->setSelected("gender","M") ?> > 
		<span class="message"><?= $genderMessage ?></span>
	</p>

	<p>
	<label for="breed">Select the Breed</label>

	<select name="breed" id="breed">
		<option value="cavoodle" <?= $form->setSelected("breed","cavoodle")?>>Cavoodle</option>

		<option value="moodle" <?= $form->setSelected("breed","moodle")?>>Moodle</option>

		<option value="schnoodle" <?= $form->setSelected("breed","schnoodle")?>>Schnoodle</option>
	</select>
	</p>

</fieldset>

	<p>
		<input type="submit" name="submitButton" id="submitButton" value="Send Details">
		<input type="reset" name="resetButton" id="resetButton" value="Reset Form">
	</p>

</form>
