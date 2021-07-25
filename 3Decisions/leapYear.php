<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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
    $year = $date->format("Y");
    echo "<br>The year is".$year;

    $year+=3;
    echo "<br>After plus3, now the year is".$year;

    if (($year%4 == 0)&&(($year%100 != 0)) || ($year%400 == 0))
    {
        echo "<br>This is a leap year";
    }
    else
    {
        echo "<br>This is not a leap year";
    }
    ?>
</body>
</html>
</body>
</html>