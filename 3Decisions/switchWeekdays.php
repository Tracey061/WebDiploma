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
    $weekday = $date->format("l");
    $weekday = "Wenesday";
    echo "today is ".$weekday;

    switch($weekday)
    {
    case "Monday":
        echo "<br>That is the first day of the week";
        break;
    case "Tuesday":
        echo "<br>That is the second day of the week";
        break;
    case "Wednesday":
        echo "<br>That is the third day of the week";
        break;
    case "Thursday":
        echo "<br>That is the fourth day of the week";
        break;
    case "Friday":
        echo "<br>That is the fifth day of the week";
        break;
    case "Saturday":
        echo "That is the sixth day of the week";
        break;
    case "<br>Sunday":
        echo "That is the seventh day of the week";
        break;
    default:
        echo "<br>Incorrect weekday";
        break;
    }
    
    ?>
</body>
</html>