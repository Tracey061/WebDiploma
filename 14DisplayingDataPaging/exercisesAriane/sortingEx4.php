<?php
	require_once "classes/DBAccess.php";

	$title = "Product sort";
	$pageHeading = "Products with sorting";

	$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
	$username = "root";
	$password = "";

	//create database object
	$db = new DBAccess($dsn, $username, $password);

	//connect to database
	$pdo = $db->connect();

	//start buffer
	ob_start();

	//check if the sorting has been selected
	if (isset($_GET["sort"]))
	{
		$orderByFields = ["customerId", "companyName", "contactName"];
	
		$sort = $_GET["sort"];

		//check if sort is in the orderByFields array
		if(in_array($sort, $orderByFields))
		{
			//set up query to execute
			$sql = "select customerId, companyName, contactName from customers order by $sort";
			$stmt = $pdo->prepare($sql);
		}
		else
		{
			//field is not allowed to be used in order by clause
			$sql = "select customerId, companyName, contactName from customers";
			$stmt = $pdo->prepare($sql);
		}
	}
	else
	{
		//set up query to execute
		$sql = "select customerId, companyName, contactName from customers";
		$stmt = $pdo->prepare($sql);
	}

	//execute SQL query
	$rows = $db->executeSQL($stmt);

	//display products
	include "templates/customersTabular.html.php";

	$output = ob_get_clean();

	include "templates/layout.html.php";
?>