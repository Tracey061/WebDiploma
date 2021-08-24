<?php
require_once "classes/DBAccess.php";

$title = "product sorting";
$pageHeading = "products with sorting";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn, $username, $password);

$pdo = $db->connect();

ob_start();

if(isset($_GET["sort"]) && isset($_GET["direction"]))
{
    $orderByFields = ["productName","unitPrice","unitsInStock"];
    $sort = $_GET["sort"];
    $direction = $_GET["direction"];

    if ($direction == "")
    {
        $direction = "asc";

    }




    if(in_array($sort,$orderByFields))
    {
        $sql = "select productName, unitPrice,unitsInStock from products order by $sort $direction";
        $stmt = $pdo->prepare($sql);
    }
    else
    {
        $sql = "select productName, unitPrice,unitsInStock from products";
        $stmt = $pdo->prepare($sql);
    }
}
else
{
    $sql = "select productName, unitPrice,unitsInStock from products";
    $stmt = $pdo->prepare($sql);
}

$rows = $db->executeSQL($stmt);
include "templates/productsTabular.html.php";

$output = ob_get_clean();

include "templates/layout.html.php";
?>