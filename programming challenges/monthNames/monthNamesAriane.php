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
    $months  = ["January","February","March","April","May","June","July","August","September","October","November","December"];
    foreach ($months as $monthName):?>
    <li><?= $monthName ?> has <?= strlen($monthName) ?> letters</li>
    <?php endforeach; 
    ?>
    </ul>
</body>
</html>