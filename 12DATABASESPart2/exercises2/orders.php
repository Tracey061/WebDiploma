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
    //get orderid
    $orderID = $_GET["id"];
    $sql = "select p.ProductName,o.Quantity,o.UnitPrice FROM orderdetails o,products p  WHERE o.OrderID =  '{$orderID}'"." and p.ProductID = o.ProductID";
    $rows = $db->executeSQL($sql);
            
    //display order and product details
    include "templates/orders.html.php";
}

$output = ob_get_clean();

include "templates/layout.html.php";

$db->disconnect();
?>

