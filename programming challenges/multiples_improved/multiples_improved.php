<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php

    for ($i=1;$i<=50;$i++)
    {

        // if ($i%3==0 && $i%5==0)
        if ($i%15==0)
        {
            echo "<p class='purpleForBoth'>$i</p>";
        }
        elseif ($i%3==0)
        {
            echo "<p class='greenFor3'>$i</p>";
        }
        elseif ($i%5==0)
        {
            echo "<p class='redFor5'>$i</p>";
        }
    }
    ?>
</body>
</html>