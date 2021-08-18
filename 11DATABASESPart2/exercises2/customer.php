<?php

require_once "classes/DBAccess.php";

$title = "customer and order";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn,$username,$password);

$db->connect();

$sql = "select CustomerID,CompanyName,ContactName from customers";

$rows = $db->executeSQL($sql);

ob_start();
include "templates/customer.html.php";

$output = ob_get_clean();

include "templates/layout.html.php";

$db->disconnect();
?>

