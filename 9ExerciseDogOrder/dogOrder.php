<?php
$title = "Dog Order form";
//start buffer
ob_start();

if(isset($_POST["submitButton"]))
{
    processForm();
}
else
{
    $missingFields = [];
    include "templates/dogOrderForm.html.php";
}

function processForm()
{
    $requiredFields = ["Name", "Address", "Gender"];
    $missingFields = [];

    foreach($requiredFields as $requiredField)
    {
        if (!isset($_POST[$requiredField]) || !$_POST[$requiredField])
        {
            //if the field is missing add it to the $missingFields array
            $missingFields[] = $requiredField;
        }
    }
    //display missing fields
    if($missingFields)
    {
        // print_r($missingFields);
        //include missing fields file
        // include "templates/displayMissingFields.html.php";
        include "templates/dogOrderForm.html.php";
    }
    else
    {
        include "templates/confirmation.html.php";
    }
}

function validateField($fieldName, $missingFields)
{
    if(in_array($fieldName, $missingFields))
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

function setChecked($fieldName,$fieldValue)
{
    if (isset($_POST[$fieldName]) && $_POST[$fieldName] == $fieldValue)
    {
        return "checked";
    }
}

function setSelected($fieldName,$fieldValue)
{
    if(isset($_POST[$fieldName]) && $_POST[$fieldName] == $fieldValue)
    {
        return "selected";
    }
}


$output = ob_get_clean();
include "templates/layout.html.php";
?>