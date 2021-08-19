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
include "templates/dropdownCategories.html.php";

// function setSelected($fieldName,$fieldValue)
// {
//     if(isset($_POST[$fieldName]) && $_POST[$fieldName] == $fieldValue)
//     {
//         return "selected";
//     }
// }

// $categoryName = "hello";


if(isset($_POST["ViewProducts"])&&isset($_POST["name"]))
{
    processForm($db,$name);
}
else
{
    // include "templates/dropdownCategories.html.php";
    echo "no input";
}

//check if there is a query string field named id
function processForm($db,$name)
{
    

    if(isset($_POST[$name]))
    {
        $sql = "select categoryID, unitPrice from Categories where categoryName = " . $_POST[$name];
        $categoryID = $db->executeSQLReturnOneValue($sql);

        $sql = "select productName, unitPrice from Products where categoryID = " .$categoryID;
        $rows = $db->executeSQL($sql);                
        //display products
        include "templates/products.html.php";
    }
}

$output = ob_get_clean();

include "templates/layout.html.php";

$db->disconnect();
?>