<?php

require_once "../classes/DBAccessSafe.php";

$title = "customer and order";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn,$username,$password);

$pdo = $db->connect();

//get customerid for later query
$sql = "select CustomerID,CompanyName,ContactName from customers";

$stmt = $pdo->prepare($sql);

$rows = $db->executeSQL($stmt);

ob_start();
include "templates/customer.html.php";

$output = ob_get_clean();

include "templates/layout.html.php";

$db->disconnect();
?>

