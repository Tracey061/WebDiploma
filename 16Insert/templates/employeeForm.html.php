<form action="insertEmployee.php" method="post" enctype="multipart/form-data">
	
	<fieldset>
		<legend>Employee Details</legend>
			
		<p>
			<label for="firstName">First Name:</label>
			<input type="text" name="firstName" id="firstName" required>
		</p>

		<p>
			<label for="lastName">Last Name:</label>
			<input type="text" name="lastName" id="lastName" required>
		</p>

		<p>
			<label for="notes">Notes:</label>
			<textarea name="notes" id="notes"></textarea>
		</p>
		<p>
			<label for="photoPath">Photo:</label>
			<input type="file" name="photoPath" id="photoPath">
		</p>

		<p>
			<input type="submit" value="Insert Employee" name="submit">
		</p>
		
		<p><?= $message ?></p>
	</fieldset>
</form>