<?php
	$title = "Number Guessing";
	$message = "";

	//start buffer
	ob_start();

	//if the submit button has been pressed
	if(isset($_POST["submitButton"]))	
	{
		//check the random number guesses left exist
		//they should as they are stored in hidden fields
		//good code should always check a value exists before 
		//trying to use it
		if(isset($_POST["random"]) && isset($_POST["guessesLeft"]))
		{
			$random = $_POST["random"];
			$guessesLeft = $_POST["guessesLeft"];
			processForm($random, $guessesLeft);
		}
	}
	else
	{
		//generate random number between 1 and 100
		$random = rand(1, 100);
		$guessesLeft = 5;

		//display form
		include "templates/guessForm.html.php";
	}

	function processForm($random, $guessesLeft)
	{
		if($_POST["guess"])
		{
			$guess = (int)$_POST["guess"];

			//check the number is between 0 and 100
			if($guess < 1 || $guess > 100)
			{
				$message = "The number must be between 0 and 100";
				
				//display form
				include "templates/guessForm.html.php";
			}
			else
			{
				//one guess has been used up
				$guessesLeft = $guessesLeft - 1;

				//check if the guess matches the random number
				if($guess < $random)
				{
					$message = "Too low";

					if($guessesLeft > 0)
					{
						//display form if number of
						include "templates/guessForm.html.php";
					}
					else
					{
						$message = "Sorry there are no more guesses";
						include "templates/guessEnd.html.php";
					}
				}
				elseif($guess > $random)
				{
					$message = "Too high";

					if($guessesLeft > 0)
					{
						//display form if number of
						include "templates/guessForm.html.php";
					}
					else
					{
						$message = "Sorry there are no more guesses";
						include "templates/guessEnd.html.php";
					}
				}
				else
				{
					$message = "Correct!!!!!";
					include "templates/guessEnd.html.php";
				}	
			}
		}
		else
		{
			$message = "Please enter a number";
			
			//display form
			include "templates/guessForm.html.php";
		}
	}

	$output = ob_get_clean();

	include "templates/layoutGuess.html.php";
?>