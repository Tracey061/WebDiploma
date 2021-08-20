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
    //get orderid
    // $orderID = $_GET["id"];
    $sql = "select p.ProductName,o.Quantity,o.UnitPrice FROM orderdetails o,products p  WHERE o.OrderID = :id and p.ProductID = o.ProductID";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":id",$_GET["id"]);
    $rows = $db->executeSQL($stmt);
            
    //display order and product details
    include "templates/orders.html.php";
}

$output = ob_get_clean();

include "templates/layout.html.php";

$db->disconnect();
?>

