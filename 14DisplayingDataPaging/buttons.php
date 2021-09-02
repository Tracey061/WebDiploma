<?php
require_once "classes/DBAccess.php";

$title = "product buttons";
$pageHeading = "Product buttons";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn, $username, $password);

$pdo = $db->connect();

ob_start();

if(isset($_POST["page"]))
{
    $start = (int)$_POST["page"];
    
    if($start > 1)
    {
        $start = ($start-1) * 5;

    }
    else
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
include "templates/buttonsForm.html.php";

$output = ob_get_clean();

include "templates/layout.html.php";
?>