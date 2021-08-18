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
    $sql1 = "select categoryName from categories";
    $sql2 = "select * from categories";
    $rows = $pdo->query($sql2);

    // foreach($rows as $row)
    // {
    //     echo $row["CategoryID"]." ".$row["CategoryName"].$row["Description"]."<br>";
    //     // echo "Name: ".$row["categoryName"]."<br>";

    //     // display the output in paragraphs
    //     // echo "<p>Name: ".$row["categoryName"]."</p>";
    // }

    foreach($rows as $row):?>
    <li><?= $row["CategoryID"]?>: <?= $row["CategoryName"]?> - <?= $row["Description"]?></li>
    <?php endforeach; 
    ?>
    </ul>

</body>
</html>