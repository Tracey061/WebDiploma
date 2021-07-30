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
    function LeapYear($year)
    {
        if (($year%4 == 0)&&(($year%100 != 0)) || ($year%400 == 0))
        {
            return TRUE;
        }
        else
        {
            // echo "<br>$year is not a leap year";
            return FALSE;
        }
    }
    
    $result1 = LeapYear(2020);
    $result2 = LeapYear("2021");
    echo "the result of leapyear2020 is ".$result1."<br>";
    echo "the result of leapyear2020 is ".$result2."<br>";

    ?>
</body>
</html>
</body>
</html>