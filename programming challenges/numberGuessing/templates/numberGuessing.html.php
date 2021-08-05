<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess the Number</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
		<form action="numberGuessing.php" method="post">
            <fieldset>
                <h1>Guess the Number</h1>
		        <p>Please guess a number between 1:100</p>
                <div>
                    <label for="number">number</label>
                    <input type="text" name="number" id="number" value="">
                </div>

                <div>
                    <button type="submit" name="submitButton" id="submitButton">submit</button>
                </div>
            </fieldset>
		</form>

</body>
</html>