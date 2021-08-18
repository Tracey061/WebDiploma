<?php
	require_once("classes/FormValidation.php");
	$title = "Order form";

	//create FormValidation object so that it can be used
	$form = new FormValidation();
	
	//start buffer
	ob_start();

	if(isset($_POST["submitButton"]))
	{
		$nameMessage = $form->checkEmpty("name");
		$nameMessage = $nameMessage." ".$form->checkName("name");

		$emailMessage = $form->checkEmail("email");

		$addressMessage = $form->checkEmpty("address");

		$phoneMessage = $form->checkEmpty("phone");
		$phoneMessage = $phoneMessage." ".$form->checkDigits("phone");

		$genderMessage = $form->checkEmpty("gender");


		if($form->valid == true)
		{
			header("Location:thanks.php");
		}
		else
		{
			include "templates/orderForm.html.php";

		}
	}
	else
	{
		$form->valid = true;
		$nameMessage = "";
		$emailMessage = "";
		$addressMessage = "";
		$genderMessage = "";
		$phoneMessage = "";

		include "templates/orderForm.html.php";
	}

	$output = ob_get_clean();

	include "templates/layout.html.php";
?>