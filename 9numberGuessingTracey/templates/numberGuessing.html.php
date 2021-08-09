<form action="numberGuessing.php" method="post">
    <fieldset>
        <h1>Guess the Number</h1>
        <p><?= $message ?></p>
        <p>There are <?= $guessLeft ?> guesses left.</p>
        <p>
            <label for="guess">Enter a number between 1 and 100:</label>
            <input type="number" name="guess" id="guess" min=1 max=100>
        </p>

        <p>
            <button type="submit" name="submitButton" id="submitButton">Am I correct?</button>
        </p>
    </fieldset>

    <input type="hidden" name="random" value="<?= $random?>">
    <input type="hidden" name="guessLeft" value="<?= $guessLeft?>">
</form>