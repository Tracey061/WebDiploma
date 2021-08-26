<?php
	require_once "classes/DBAccess.php";

	$title = "Displaying Products";
	$pageHeading = "Products";

	$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
	$username = "root";
	$password = "";

	//create database object
	$db = new DBAccess($dsn, $username, $password);

	//connect to database
	$pdo = $db->connect();

	//next has been clicked
	if (isset($_POST["next"]) && isset($_POST["start"]))
	{	
		//force start to be an integer and add 5 to it
		$start = (int)$_POST["start"] + 5;
	}
	//previous has been clicked
	elseif (isset($_POST["prev"]) && isset($_POST["start"]))
	{
		//force start to be an integer and remove 5 from it
		$start = (int)$_POST["start"] - 5;
	}
	//implement page numbers
	elseif (isset($_POST["page"]) && isset($_POST["start"]))
	{
		$start = ((int)$_POST["page"] - 1) * 5;
		//force start to be an integer and remove 5 from it
		//$start = ((int)$_POST["page"] * 5)-1;
	}
	//first time we load the page next and previous have not been clicked
	else
	{
		$start = 0;
	}
		
	//set up query to execute
	$sql = "select productId, productName, unitPrice, unitsInStock from Products limit :start, 5";
	
	$stmt = $pdo->prepare($sql);
	$stmt->bindValue(":start", $start, PDO::PARAM_INT);
	
	//execute SQL query
	$rows = $db->executeSQL($stmt);

	//get total number of rows
	//set up query to execute
	$sql = "select count(*) from Products";
	$stmt = $pdo->prepare($sql);
	$total = $db->executeSQLReturnOneValue($stmt);

	//work out how many pages you will need ignore decimal places
	$pages = (int)($total / 5);
	
	//start buffer
	ob_start();
			
	//display products
	//include "templates/productDetails.html.php";
	include "templates/productDetails2.html.php";

	//display form
	include "templates/limitFormNextPrevNum.html.php";

	$output = ob_get_clean();

	include "templates/layout.html.php";

?>