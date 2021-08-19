<?php

require_once "../classes/DBAccess.php";

$title = "customer and order";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn,$username,$password);

$db->connect();

ob_start();

if(isset($_GET["id"]))
{	
    // echo "get order id";
    //get customerid
    $customerID = $_GET["id"];
    $sql = "select OrderID,OrderDate from orders where customerID = '{$customerID}'";
    $rows = $db->executeSQL($sql);
            
    //display customerorder
    include "templates/customerOrder.html.php";
}

$output = ob_get_clean();

include "templates/layout.html.php";

$db->disconnect();
?>

