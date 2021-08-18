<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Connecting to a database</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<h1>Displaying the categories</h1>
<ul>
<?php
$dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
$username = "root";
$password = "";
//connect to database
try
{
$pdo = new PDO($dsn, $username, $password);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
echo "Connection failed: " . $e->getMessage();
}
$sql = "select CategoryName, CategoryId from Categories";
//execute SQL query
try
{
$rows = $pdo->query($sql);
foreach ($rows as $row):
$id = $row["CategoryId"];
$name = $row["CategoryName"];
?>
<li><a href="productsByCategory.php?id=<?= $id ?>"><?= $name ?></a></li>
<?php endforeach; 

}
catch(PDOException $e)
{
echo "Query failed: " . $e->getMessage();
}
?>
</ul>
<?php
//check if there is a query string field named id
if(isset($_GET["id"])):
$sql = "select productName, unitPrice from Products where categoryID = " .
$_GET["id"];
$rows = $pdo->query($sql);
?>
<ul>
<?php foreach ($rows as $row):
$productName = $row["productName"];
$unitPrice = sprintf("%1.2f", $row["unitPrice"]);
?>
<li><?= $productName ?> $<?= $unitPrice ?></li>
<?php endforeach;?>
</ul>
<?php endif; 
$pdo = null;
?>
</body>
</html>