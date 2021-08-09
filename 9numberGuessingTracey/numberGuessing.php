<?php
$title = "numberGuessing";
$message = "";

ob_start();

if(isset($_POST["submitButton"]))
{
    if(isset($_POST["random"]) && isset($_POST["guessLeft"]))
    {
        $random = $_POST["random"];
        $guessLeft = $_POST["guessLeft"];
        ProcessForm($random,$guessLeft);
    }
}
else
{
    $random = rand(1,100);
    // echo "<p>You roll a ".$random."</p>";

    $guessLeft = 5;
    include "templates/numberGuessing.html.php";        
}


function processForm($random,$guessLeft)
{
    if ($_POST["guess"])
    {
        $guess = (int)$_POST["guess"];
  

        if($guess<1 || $guess>100)
        {
            $message = "The number must be between 1 and 100 :";
            include "templates/numberGuessing.html.php";   
        }
        elseif($guess == $random)
        {
            $message = "Correct!!!!!";
            include "templates/win.html.php";
        }
        else
        {        
            if($guess < $random)
            {
                $message = "Too Low";
            }
            else
            {
                $message = "Too High";
            }

            $guessLeft = $guessLeft -1;
            if($guessLeft < 1)
            {
                $message = "You have used out the guess times.";
                include "templates/encourage.html.php";
            }
            else
            {
                include "templates/numberGuessing.html.php";
            }  
        }
    }
    else
    {
        $message = "Please enter a number";
			
        //display form
        include "templates/numberGuessing.html.php";
    }  
}

$output = ob_get_clean();

include "templates/layout.html.php";
?>