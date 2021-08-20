<?php

require_once "../classes/DBAccess.php";

$title = "Products by category using drop down list";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn,$username,$password);

$db->connect();

$sql = "select CategoryName, CategoryId from Categories";

$rows = $db->executeSQL($sql);

ob_start();

if(isset($_GET["id"]))
{
    $categoryID = $_GET["id"];
}
else
{
    $categoryID = 0;
}
include "templates/DDLcategories.html.php";

$categoryName = "";

if(isset($_GET["id"]))
{
        $sql = "select productName, unitPrice from Products where categoryID = " .$categoryID;
        $rows = $db->executeSQL($sql);                
        //display products
        include "templates/products.html.php";
}

$output = ob_get_clean();

include "templates/layout.html.php";

$db->disconnect();
?>