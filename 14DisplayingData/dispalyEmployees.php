<?php
require_once "classes/DBAccess.php";

$title = "Customers";
$pageHeading = "Employees";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn, $username, $password);

$pdo = $db->connect();

$sql = "select firstName, lastName,photoPath,birthDate,hireDate,notes from employees";

$stmt = $pdo->prepare($sql);

$rows = $db->executeSQL($stmt);

ob_start();

include "templates/employees.html.php";

$output = ob_get_clean();

include "templates/layout.html.php";
?>