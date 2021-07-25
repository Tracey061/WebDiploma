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
    $loopCounter = 1;
    
    for ($i = 1;$i <= 10;$i++)
    {
        echo "$i<br>";
    }
    echo "End of loop. i is ".$i."<br>";

    while($loopCounter <= 10)
    {
        echo "$loopCounter<br>";
        $loopCounter++;
    }

    echo "End of loop. Loopcounter is ".$loopCounter;
    ?>
</body>
</html>