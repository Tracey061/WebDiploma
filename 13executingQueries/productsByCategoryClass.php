<?php

require_once "classes/DBAccess.php";

$title = "Products by category using classes";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

$db = new DBAccess($dsn,$username,$password);

$pdo = $db->connect();

$sql = "select CategoryName, CategoryId from Categories";
$stmt = $pdo->prepare($sql);
$rows = $db->executeSQL($stmt);


ob_start();
include "templates/categories.html.php";

//check if there is a query string field named id
if(isset($_GET["id"]))
{	
    //get category name
    // $sql = "select categoryName from Categories where categoryID = " . $_GET["id"];
    // $categoryName = $db->executeSQLReturnOneValue($sql);
    // $categoryName = $_GET["name"];
    $sql = "select categoryName from Categories where categoryID = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":id",$_GET["id"]);
    $categoryName = $db->executeSQLReturnOneValue($stmt);
    

    //get products
    // $sql = "select productName, unitPrice from Products where categoryID = " . $_GET["id"];
    // $rows = $db->executeSQL($sql);

    $sql = "select productName, unitPrice from Products where categoryID = :id";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":id",$_GET["id"]);
    $rows = $db->executeSQL($stmt);
    
            
    //display products
    include "templates/products.html.php";
}

$output = ob_get_clean();

include "templates/layout.html.php";

$db->disconnect();
?>

