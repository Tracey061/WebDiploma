<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<ul>
<?php
    $dsn = "mysql:host=localhost;dbname=northwind;charset=utf8";
    $username = "root";
    $password = "";

    $pdo = new PDO($dsn,$username,$password);
    $sql1 = "SELECT ProductName,UnitPrice FROM products";

    
    $rows = $pdo->query($sql1);

    foreach($rows as $row): ?>
        <li><?= $row["ProductName"] ?>:$<?= sprintf("%1.2f",$row["UnitPrice"]) ?></li>
    <?php endforeach;

?>
</ul>
    


</body>
</html>