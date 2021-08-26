<?php
	require_once "classes/DBAccess.php";

	$title = "Displaying Employees";
	$pageHeading = "Employees";

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
		//force start to be an integer and add 3 to it
		$start = (int)$_POST["start"] + 3;
	}
	//previous has been clicked
	elseif (isset($_POST["prev"]) && isset($_POST["start"]))
	{
		//force start to be an integer and remove 3 from it
		$start = (int)$_POST["start"] - 3;
	}
	//first time we load the page next and previous have not been clicked
	else
	{
		$start = 0;
	}

	//set up query to execute
	$sql = "select firstName, lastName, photoPath, birthDate, hireDate, notes from employees limit :start, 3";
    $stmt = $pdo->prepare($sql);
	$stmt->bindValue(":start", $start, PDO::PARAM_INT);

	//execute SQL query
    $rows = $db->executeSQL($stmt);

    
    //get total number of rows
	//set up query to execute
	$sql = "select count(*) from Employees";
	$stmt = $pdo->prepare($sql);
	$total = $db->executeSQLReturnOneValue($stmt);
	
	//start buffer
	ob_start();
			
	//display employees
    include "templates/employeesEx1.html.php";
    
    //display form
	include "templates/limitFormNextPrevEx1.html.php";

	$output = ob_get_clean();

	include "templates/layout.html.php";

?>