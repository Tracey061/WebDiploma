<?php
	require_once "classes/DBAccess.php";

	$title = "Products by category";

	$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
	$username = "root";
	$password = "";

	//create database object
	$db = new DBAccess($dsn, $username, $password);

	//connect to database
	$db->connect();

	//set up query to execute
	$sql = "select CategoryName, CategoryId from Categories";

	//execute SQL query
	$rows = $db->executeSQL($sql);
	
	//start buffer
	ob_start();
			
	//display categories
	include "templates/categories.html.php";

	$categoryName = "";

	//check if there is a query string field named id
	if(isset($_GET["id"]))
	{	
		//get category name
		$sql = "select categoryName from Categories where categoryID = " . $_GET["id"];
		$categoryName = $db->executeSQLReturnOneValue($sql);
		//$categoryName = $_GET["name"];

		//get products
		$sql = "select productName, unitPrice from Products where categoryID = " . $_GET["id"];

		$rows = $db->executeSQL($sql);
				
		//display products
		include "templates/products.html.php";
	}

	$output = ob_get_clean();

	include "templates/layout.html.php";

	$db->disconnect();
?>
			

	
