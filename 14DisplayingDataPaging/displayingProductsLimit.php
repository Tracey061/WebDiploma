<?php
require_once "classes/DBAccess.php";

$title = "product paging";
$pageHeading = "Products";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn, $username, $password);

$pdo = $db->connect();

ob_start();

if(isset($_POST["display"]) && isset($_POST["start"]))
{
    $start = (int)$_POST["start"];
    if ($start < 0)
    {
        $start = 0;
    }
    
    $sql = "select productId,productName, unitPrice,unitsInStock from products limit :start,5";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":start",$start,PDO::PARAM_INT);
}
else
{
    $sql = "select productId,productName, unitPrice,unitsInStock from products limit 5";
    $stmt = $pdo->prepare($sql);
}

$rows = $db->executeSQL($stmt);
include "templates/productDetails.html.php";
include "templates/limitForm.html.php";

$output = ob_get_clean();

include "templates/layout.html.php";
?>