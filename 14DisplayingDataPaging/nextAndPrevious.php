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

if(isset($_POST["next"]) && isset($_POST["start"]))
{
    $start = (int)$_POST["start"] + 5;
}
elseif(isset($_POST["prev"]) && isset($_POST["start"]))
{
    $start = (int)$_POST["start"] - 5;

    if ($start < 0)
    {
        $start = 0;
    }
}
else
{
    $start = 0;
}

$sql = "select productId,productName, unitPrice,unitsInStock from products limit :start,5";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":start",$start,PDO::PARAM_INT);
$rows = $db->executeSQL($stmt);

$sql = "select count(*) from products";
$stmt = $pdo->prepare($sql);
$count = $db->executeSQLReturnOneValue($stmt);

include "templates/productsDetails.html.php";
include "templates/nextPrevlimitForm.html.php";

$output = ob_get_clean();

include "templates/layout.html.php";
?>