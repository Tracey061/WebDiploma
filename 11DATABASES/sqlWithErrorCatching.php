<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=style.css rel=stylesheet>
    <title>Document</title>
</head>
<body>
<table class=sqltable>
  <tr>
    <th>ProductName</th>
    <th>UnitPrice</th>
    <th>UnitsInStock</th>
  </tr>
    <?php
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
        echo "connection failed: ".$e->getMessage();
    }

    // $sql = "SELECT FirstName, LastName FROM employees";
    $sql = "SELECT ProductName,UnitPrice,UnitsInStock FROM products";


    try
    {
        $rows = $pdo->query($sql);
        foreach($rows as $row): ?>
            <!-- <p>FirstName:<?= $row["FirstName"] ?> LastName:<?= $row["LastName"] ?></p> -->
            <tr>
            <td><?= $row["ProductName"]?></td>
            <td><?= $row["UnitPrice"]?></td>
            <td><?= $row["UnitsInStock"]?></td>
            </tr>
         <?php endforeach; 
    }
    catch(PDOException $e)
    {
        echo "connection failed: ".$e->getMessage();
    }
    $pdo = null;
?>

</table>
</body>
</html>