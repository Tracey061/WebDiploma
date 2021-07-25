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
    $date = new DateTime();
    $hour = $date->format("H");
    echo "<br>The hour is".$hour;

    $hour+=6;
    echo "<br>After plus6, now the hour is".$hour;

    if ($hour < 12)
    {
        echo "<br>Good Morning";
    }
    elseif ($hour >= 12 && $hour < 18)
    {
        echo "<br>Good Afternoon";
    }
    else
    {
        echo "<br>Good Evening";
    }
    ?>
</body>
</html>