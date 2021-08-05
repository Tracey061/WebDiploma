	<form action="numberGuessing.php" method="post">
		<p><?= $message ?></p>
		<p>You have <?= $guessesLeft ?> guesses left</p>
		<p>
			<label for="guess">Enter a number between 1 and 100:</label>
			<input type="number" min="1" max="100" name="guess" id="guess">
		</p>
	
		<p>
			<input type="submit" name="submitButton" id="submitButton" value="Am I correct?">
		
		</p>

		<input type="hidden" name="random" value="<?= $random ?>">
		<input type="hidden" name="guessesLeft" value="<?= $guessesLeft ?>">

	</form>
