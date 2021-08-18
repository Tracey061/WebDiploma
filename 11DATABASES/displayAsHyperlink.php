<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link href=style.css rel=stylesheet> -->
    <title>Document</title>
</head>
<body>
<h1>display the categories</h1>
<ul>
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
    $sql = "SELECT CategoryName,CategoryId FROM Categories";

    try
    {
        $rows = $pdo->query($sql);
        foreach($rows as $row): 
            $id = $row["CategoryId"];
            $name = $row["CategoryName"];
            echo "id: ".$id."<br>";
            ?>
            <li><a href="productsByCategory.php?id=<?= $id ?>"><?= $name ?></a></li>
        <?php endforeach; 
    }
    catch(PDOException $e)
    {
        echo "connection failed: ".$e->getMessage();
    }
    // $pdo = null;
    ?>
    </ul>
</body>
</html>