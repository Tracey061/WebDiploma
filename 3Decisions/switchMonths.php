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
    $date = new Datetime();
    $month = $date->format("m");
    $year = $date->format("Y");
    $month = "02";
    $year = 2024;
    echo "this month is ".$month;

    switch($month)
    {
    case "01":
    case "03":
    case "05":
    case "07":
    case "08":
    case "10":
    case "12":
        echo "<br>There are 31 days in this month";
        break;

    case "04":
    case "06":
    case "09":
    case "11":
        echo "<br>There are 30 days in this month";
        break;

    case "02":
        if (($year%4 == 0)&&(($year%100 != 0)) || ($year%400 == 0))
        {
            echo "<br>There are 29 days in this month";
        }
        else
        {
            echo "<br>There are 28 days in this month";
        }
        
        break;

    default:
        echo "<br>Incorrect month";
        break;
    }
    
    ?>
</body>
</html>