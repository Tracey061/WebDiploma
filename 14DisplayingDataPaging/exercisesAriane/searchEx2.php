<?php
	require_once "classes/DBAccess.php";

	$title = "Employee search";
	$pageHeading = "Employees";

	//start buffer
	ob_start();

	//display the search form
	include "templates/searchFormEx2.html.php";

	//check if the search button has been pressed
	if (isset($_GET["submitButton"]) && isset($_GET["search"]))
	{
	
		$search = $_GET["search"];

		$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
		$username = "root";
		$password = "";

		//create database object
		$db = new DBAccess($dsn, $username, $password);

		//connect to database
		$pdo = $db->connect();

        //set up query to execute
        //Q2
        $sql = "select firstName, lastName, photoPath, birthDate, hireDate, notes from employees where firstName like :name";
        
        //Q3
		// $sql = "select firstName, lastName, photoPath, birthDate, hireDate, notes from employees where firstName like :name or lastName like :name";
		
		$stmt = $pdo->prepare($sql);
	
		$stmt->bindValue(":name", "%$search%");

		//execute SQL query
		$rows = $db->executeSQL($stmt);
	
		//display products
		include "templates/employees.html.php";
	}

	$output = ob_get_clean();

	include "templates/layout.html.php";
?>