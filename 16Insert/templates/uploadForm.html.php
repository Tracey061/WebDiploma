<form action="uploadExample.php" method="post" enctype="multipart/form-data">
	<p>
		<label for="fileToUpload">Select image to upload:</label>
		<input type="file" name="fileToUpload" id="fileToUpload">
	</p>

	<input type="submit" value="Upload Image" name="submit">
	<p><?= $message ?></p>
</form>