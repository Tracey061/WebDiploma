<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Products</h1>

    <?php

    $dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
    $username = "root";
    $password = "";
    $pdo = new PDO($dsn,$username,$password);
    
    if(isset($_GET["id"])):
        $sql1 = "SELECT ProductName,UnitPrice,UnitsInStock FROM products where CategoryID = ".$_GET["id"];

        $rows = $pdo->query($sql1);
        ?>

        <ul>
            <?php foreach($rows as $row):
                $productname = $row["ProductName"];
                $unitprice = $row["UnitPrice"];
                ?>
                <li><?=$productname?> <?=$unitprice?> <?=$_GET["id"]?> </li>
            <?php endforeach; ?>
        </ul>

    <?php endif; ?>
</body>
</html>
