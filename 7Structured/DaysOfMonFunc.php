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
    function DaysOfMon($month)
    {
        switch($month)
        {
        case "01":
        case "03":
        case "05":
        case "07":
        case "08":
        case "10":
        case "12":
            // echo "<br>There are 31 days in $month";
            return 31;
            break;

        case "04":
        case "06":
        case "09":
        case "11":
            // echo "<br>There are 30 days in $month";
            return 30;
            break;

        case "02":
            // echo "<br>There are 28 days in $month";
            return 28;
            break;

        default:
            echo "<br>Incorrect month";
            break;
        }
    } 

    $result1 = DaysOfMon(02);
    $result2 = DaysOfMon("09");
    echo "the days of 02 is ".$result1."<br>";
    echo "the days of 09 is ".$result2."<br>";

    ?>
</body>
</html>