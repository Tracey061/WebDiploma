<?php
$title = "numberGuessing";

function validateField($missingFields)
{
    if ($missingFields == true) 
    {
    return 'class="error"';
    }
}

function setValue($fieldName)
{
    if(isset($_POST[$fieldName]))
    {
        return $_POST[$fieldName];
    }
}

function processForm($diceRoll)
{
    $missingFields = false;
    $guessResult = false;

  if (!isset($_POST["number"]) || !$_POST["number"])
        
    {   
        $missingFields = true;
        include "templates/numberGuessing.html.php";      
    }
    elseif($_POST["number"] == $diceRoll)
    {
        echo "right guessing. winner.";
        $guessResult = true;
        
    }
    elseif($_POST["number"] > $diceRoll)
    {
        echo "wrong guessing. Bigger than the answer.";
        $guessResult = false;
    }
    elseif($_POST["number"] < $diceRoll)
    {
        echo "wrong guessing. Smaller than the answer.";
        $guessResult = false;
    }

    return $guessResult;
}

$diceRoll = rand(1,100);

echo "<p>You roll a ".$diceRoll."</p>";

$result = false;

for($i=0;$i<5;$i++)
{
    ob_start();

    if(isset($_POST["submitButton"]))
    {
        $result = processForm($diceRoll);

        if ($result == true)
        {
            break;
            include "templates/win.html.php";  
        }
        else
        {
            include "templates/numberGuessing.html.php"; 
        }
    }

    $output = ob_get_clean();
    include "templates/layout.html.php";
}

if ($result == false)
{
    include "templates/encourage.html.php";  
}

?>
