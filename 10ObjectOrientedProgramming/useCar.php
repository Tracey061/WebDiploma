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
    require_once("classes/Car.php");

    $myCar = new Car();
    $myCar->colour = "green";
    $myCar->fuelVolume = 100;
    
    // $myCar->accelerate();
    // $myCar->accelerate();

    // echo $myCar->colour;
    // echo $myCar->fuelVolume;
    // echo $myCar->getSpeed();

    ?>

    <p>My first car is a <?= $myCar->colour ?> car. <br>the fuelVolume is <?= $myCar->fuelVolume ?> </p>

    <?php while($myCar->accelerate(20)):?>
        <p>the speed is <?= $myCar->getSpeed() ?> <br></p>
    <?php endwhile; ?>

    <p>it is time to slow down</p>

    <?php while($myCar->brake(30)):?>
        <p>the speed is <?= $myCar->getSpeed() ?> <br></p>
    <?php endwhile; ?>

</body>
</html>