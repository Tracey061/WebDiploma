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
    $sql = "SELECT productName, orderdetails.unitPrice, quantity FROM orderdetails INNER JOIN products ON orderdetails.ProductID = products.ProductID WHERE orderId = :id";

    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":id", $_GET["id"]);

    $rows = $db->executeSQL($stmt);

    ob_start();

    include "templates/orders.html.php";

    $output = ob_get_clean();
}


include "templates/layout.html.php";

$pdo = null;
?>