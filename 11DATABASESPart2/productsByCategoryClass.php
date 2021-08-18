<?php

require_once "classes/DBAccess.php";

$title = "Products by category using classes";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn,$username,$password);

$db->connect();

$sql = "select CategoryName, CategoryId from Categories";

$rows = $db->executeSQL($sql);

ob_start();
include "templates/categories.html.php";

// $categoryName = "hello";

//check if there is a query string field named id
// if(isset($_GET["id"]))
if(isset($_GET["id"]) && isset($_GET["name"]))
{	
    //get category name
    // $sql = "select categoryName from Categories where categoryID = " . $_GET["id"];
    // $categoryName = $db->executeSQLReturnOneValue($sql);
    $categoryName = $_GET["name"];

    //get products
    $sql = "select productName, unitPrice from Products where categoryID = " . $_GET["id"];

    $rows = $db->executeSQL($sql);
            
    //display products
    include "templates/products.html.php";
}

$output = ob_get_clean();

include "templates/layout.html.php";

$db->disconnect();
?>

