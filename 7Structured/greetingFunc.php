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
    function greeting1()
    {
        $date = new DateTime();
        $hour = $date->format("H");
        echo "<br>The hour is".$hour;

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
    }

    function greeting2($time)
    {
        if ($time < 12)
        {
            echo "<br>Now is $time o'clock. Good Morning";
        }
        elseif ($time >= 12 && $time < 18)
        {
            echo "<br>Now is $time o'clock. Good Afternoon";
        }
        else
        {
            echo "<br>Now is $time o'clock. Good Evening";
        }
    }

    greeting1();

    greeting2(19);
    greeting2("23");
    greeting2(03);
    ?>

</body>
</html>