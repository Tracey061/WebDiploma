<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once("classes/Athelete.php");

    $Athelete1 = new Athelete("John","Smith",0);
    
    $Athelete1->walk();
    $Athelete1->getSpeed();
    $Athelete1->stop();
    $Athelete1->getSpeed();
    $Athelete1->run();
    $Athelete1->getSpeed();


    ?>
    

</body>
</html>