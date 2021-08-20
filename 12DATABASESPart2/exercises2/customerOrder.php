<?php

require_once "../classes/DBAccessSafe.php";

$title = "customer and order";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn,$username,$password);

$pdo = $db->connect();

ob_start();

if(isset($_GET["id"]))
{	
    // echo "get order id";
    //get customerid
    // $customerID = $_GET["id"];
    // $sql = "select OrderID,OrderDate from orders where customerID = '{$customerID}'";
    
    $sql = "select OrderID,OrderDate from orders where customerID = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":id",$_GET["id"]);

    $rows = $db->executeSQL($stmt);
            
    //display customerorder
    include "templates/customerOrder.html.php";
}

$output = ob_get_clean();

include "templates/layout.html.php";

$db->disconnect();
?>

