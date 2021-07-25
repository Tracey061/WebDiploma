<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dispaly the date</h1>
    <?php
    $date = new Datetime();

    echo $date->format("d/m/Y");
    ?>
</body>
</html>