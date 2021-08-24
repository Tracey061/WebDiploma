<?php
require_once "classes/DBAccess.php";

$title = "product search";
$pageHeading = "products";

ob_start();
include "templates/searchForm.html.php";

if(isset($_GET["search"])&&isset($_GET["submitButton"]))
{
    $search = $_GET["search"];
    $dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
    $username = "root";
    $password = "";

    $db = new DBAccess($dsn, $username, $password);

    $pdo = $db->connect();

    $sql = "select productName, unitPrice from products where productName like :productName";

    $stmt = $pdo->prepare($sql);

    $stmt->bindValue(":productName","%$search%");

    $rows = $db->executeSQL($stmt);
    include "templates/products.html.php";

}

$output = ob_get_clean();

include "templates/layout.html.php";
?>