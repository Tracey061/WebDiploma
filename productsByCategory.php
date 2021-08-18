<?php

$title = "Products by category";

$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";

try
{
    $pdo = new PDO($dsn,$username,$password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}

$sql = "select CategoryName, CategoryId from Categories";
try
{
    $rows = $pdo->query($sql);
    ob_start();
    include "templates/categories.html.php";
}
catch(PDOException $e)
{
    echo "query failed: " . $e->getMessage();
}




if(isset($_GET["id"]))
{


    $sql = "SELECT ProductName,UnitPrice FROM products where CategoryID = ".$_GET["id"];

    try
    {
        $rows = $pdo->query($sql);
        ob_start();
        include "templates/products.html.php";
    }
    catch(PDOException $e)
    {
        echo "query failed: " . $e->getMessage();
    }
}

$output = ob_get_clean();
include "templates/layout.html.php";
$pdo = null;

?>
</body>
</html>
