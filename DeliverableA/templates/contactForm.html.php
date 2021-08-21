<?php if($form->valid == false): ?>
	<p class="error">Please supply the missing information</p>
<?php endif; ?>

<h1>Contact Form</h1>

<p>Please fill out the details to keep in contact:</p>

<form action="contactPage.php" method="post" novalidate>
<fieldset>
	<legend>Contact Details</legend>
	<p>
		<label for="firstName" <?= $form->setErrorClass("firstName") ?>> First name *</label>
		<input type="text" name="firstName" id="firstName" value="<?= $form->setValue("firstName") ?>"> 
		<span class="message"><?= $firstNameMessage ?></span>
	</p>

	<p>
		<label for="lastName" <?= $form->setErrorClass("lastName") ?>>Last name *</label>
		<input type="text" name="lastName" id="lastName" value="<?= $form->setValue("lastName") ?>"> 
		<span class="message"><?= $lastNameMessage ?></span>
	</p>

	<p>
		<label for="phone">Contact number </label>
		<input type="text" name="phone" id="phone" value="<?= $form->setValue("phone") ?>"> 
	</p>

	<p>
		<label for="email" <?= $form->setErrorClass("email") ?>>Email address *</label>
		<input type="email" name="email" id="email" value="<?= $form->setValue("email") ?>"> 
		<span class="message"><?= $emailMessage ?></span>
	</p>

	<p>
		<div class="questionDiv">
			<label for="question" >Question </label>
			<textarea id="question" name="question" rows="4" cols="150" value="<?= $form->setValue("question") ?>"></textarea>
		</div>
	</p>
</fieldset>

	<p>
		<input type="submit" name="submitButton" id="submitButton" value="Send Details">
		<input type="reset" name="resetButton" id="resetButton" value="Reset Form">
	</p>

</form>
