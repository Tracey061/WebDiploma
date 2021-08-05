<?php if($missingFields == true): ?>
    <p class="error">Please select the website</p>
<?php endif; ?>

<h1>Redirect</h1>
		
<form action="Redirect.php" method="post">
<fieldset>
	<p>
	<label <?= validateField($missingFields) ?>></label>

	<label for="Google" class="radioLabel"><a href="https://www.google.com/" style="text-decoration:none">Google</a></label>
	<input type="radio" name="website" id="Google" value="Google">
	
	
	<label for="W3C" class="radioLabel"><a href="https://www.w3schools.com/" style="text-decoration:none">W3C</a></label>
	<input type="radio" name="website" id="W3C" value="W3C" >

	<label for="PHP" class="radioLabel"><a href="https://www.php.net/" style="text-decoration:none">PHP</a></label>
	<input type="radio" name="website" id="PHP" value="PHP">
	</p>
</fieldset>

	<p>
	<input type="submit" name="submitButton" id="submitButton" value="Go">
	</p>

</form>