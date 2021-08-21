<?php
	require_once("classes/FormValidation.php");
	$title = "Contact form";

	//create FormValidation object so that it can be used
	$form = new FormValidation();
	
	//start buffer
	ob_start();

	if(isset($_POST["submitButton"]))
	{
		$firstNameMessage = $form->checkEmpty("firstName");
		$firstNameMessage = $firstNameMessage." ".$form->checkName("firstName");

        $lastNameMessage = $form->checkEmpty("lastName");
		$lastNameMessage = $lastNameMessage." ".$form->checkName("lastName");

        $emailMessage = $form->checkEmail("email");

		if($form->valid == true)
		{
			header("Location:thanks.php");
		}
		else
		{
			include "templates/contactForm.html.php";

		}
	}
	else
	{
		$form->valid = true;
		$firstNameMessage = "";
        $lastNameMessage = "";
		$emailMessage = "";		

		include "templates/contactForm.html.php";
	}

	$output = ob_get_clean();

	include "templates/layout.html.php";
?>