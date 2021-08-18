<?php

require_once "../classes/DBAccess.php";

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

if(isset($_GET["id"]))
{	
    echo "get order id";
    //get category name
    $customerID = $_GET["id"];
    $sql = "select OrderID,OrderDate from orders where customerID = '{$customerID}'";
    $rows = $db->executeSQL($sql);
            
    //display products
    include "templates/customerOrder.html.php";
}

$output = ob_get_clean();

include "templates/layout.html.php";

$db->disconnect();
?>

