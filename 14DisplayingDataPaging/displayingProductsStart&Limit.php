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

$sql = "select count(*) from products";
$stmt = $pdo->prepare($sql);
$count = $db->executeSQLReturnOneValue($stmt);

if(isset($_POST["display"]) && isset($_POST["start"])&& isset($_POST["rownumber"]))
{
    $start = (int)$_POST["start"];
    $start--;
    $rownumber = (int)$_POST["rownumber"];
    if ($start < 0)
    {
        $start = 0;
    }

    if ($rownumber <= 0)
    {
        $rownumber = 5;
    }
    
    $sql = "select productId,productName, unitPrice,unitsInStock from products limit :start,:rownumber";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":start",$start,PDO::PARAM_INT);
    $stmt->bindValue(":rownumber",$rownumber,PDO::PARAM_INT);
}
else
{
    $sql = "select productId,productName, unitPrice,unitsInStock from products limit 5";
    $stmt = $pdo->prepare($sql);
}

$rows = $db->executeSQL($stmt);
include "templates/productsDetails.html.php";
include "templates/start&limitForm.html.php";

$output = ob_get_clean();

include "templates/layout.html.php";
?>