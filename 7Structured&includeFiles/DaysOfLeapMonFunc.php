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

    function DaysOfLeapMon($year,$month)
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
            // echo "<br>There are 31 days in $year $month";
            return 31;
            break;

        case "04":
        case "06":
        case "09":
        case "11":
            // echo "<br>There are 30 days in $year $month";
            return 30;
            break;

        case "02":
            if (LeapYear($year) == "TRUE")
            {
                // echo "<br>There are 29 days in $year $month";
                return 29;
            }
            else
            {
                // echo "<br>There are 28 days in $year $month";
                return 28;
            }
            
            break;

        default:
            echo "<br>Incorrect month";
            break;
        }
    }

    $result1 = DaysOfLeapMon(2021,02);
    $result2 = DaysOfLeapMon("2020","02");
    echo "the DAYS of202102 is ".$result1."<br>";
    echo "the result of 202002 is ".$result2."<br>";

    ?>
</body>
</html>