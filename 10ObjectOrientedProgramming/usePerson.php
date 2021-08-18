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
    require_once("classes/Person.php");

    $person1 = new person("John","Smith","26");
    echo $person1->showDetails();

    ?>
    

</body>
</html>