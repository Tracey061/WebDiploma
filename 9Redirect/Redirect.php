<?php
$title = "Redirect";

ob_start();

if(isset($_POST["submitButton"]))
{
    $redirect = processForm([]);
}
else
{
    $redirect = false;
    $missingFields = false;
    include "templates/Redirect.html.php";
}

function processForm()
{
    $missingFields = false;

  if (!isset($_POST["website"]) || !$_POST["website"])
        
    {   
        $missingFields = true;
        include "templates/Redirect.html.php";      
        $redirect = false;  
    }
    else
    {
        // include "templates/confirmation.html.php";
        $redirect = true;
    }

    return $redirect;
}

function validateField($missingFields)
{
    if ($missingFields == true) 
    {
    return 'class="error"';
    }
}


function setChecked($fieldName,$fieldValue)
{
    if (isset($_POST[$fieldName]) && $_POST[$fieldName] == $fieldValue)
    {
        return "checked";
    }
}



$output = ob_get_clean();
include "templates/layout.html.php";
?>