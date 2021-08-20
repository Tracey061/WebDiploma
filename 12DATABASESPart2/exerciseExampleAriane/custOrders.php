<?php
require_once "classes/DBAccess.php";

$title = "Customers";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn, $username, $password);

$pdo = $db->connect();

$output = "";

if(isset($_GET["id"]))
{
    $sql = "SELECT orderId, orderDate FROM `orders` WHERE customerId = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":id", $_GET["id"]);

    $rows = $db->executeSQL($stmt);

    ob_start();

    include "templates/custOrders.html.php";

    $output = ob_get_clean();
}
else
{
    $output = "No orders to display";
}


include "templates/layout.html.php";

$pdo = null;
?>