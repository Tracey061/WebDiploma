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

	if (isset($_POST["page"]))
	{	
		//force start to be an integer 
		$start = (int)$_POST["page"];

		if($start > 1)
		{
			$start = ($start * 5) - 1;
		}
		else
		{
			$start = 0;
		}
	}
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
	
	//start buffer
	ob_start();
			
	//display products
	include "templates/productDetails.html.php";

	//display form
	include "templates/buttons.html.php";

	$output = ob_get_clean();

	include "templates/layout.html.php";

?>
