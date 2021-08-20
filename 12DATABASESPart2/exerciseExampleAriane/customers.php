<?php
require_once "classes/DBAccess.php";

$title = "Customers";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn, $username, $password);

$pdo = $db->connect();

$sql = "SELECT customerID, companyName FROM customers";

$stmt = $pdo->prepare($sql);

$rows = $db->executeSQL($stmt);

ob_start();

include "templates/customers.html.php";

$output = ob_get_clean();

include "templates/layout.html.php";

$pdo = null;
?>