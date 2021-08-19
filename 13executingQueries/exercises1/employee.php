<?php

require_once "../classes/DBAccess.php";

$title = "display employee information";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn,$username,$password);

$db->connect();

$sql = "select FirstName,LastName,Title from employees";

$rows = $db->executeSQL($sql);

ob_start();
include "templates/employee.html.php";

$output = ob_get_clean();

include "templates/layout.html.php";

$db->disconnect();
?>

