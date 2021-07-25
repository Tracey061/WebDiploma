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
    $number = 0;
    
    while ($number != 10)
    {
        $number = rand(1,10);
        echo "the random number is ".$number."<br>";
        
        if ($number == 10)
        {
            echo "<p>Winner</p>";
        }
        else
        {
            echo "<p>Sorry.Keep on trying</p>";
        }
    }

    echo "the end of loop. the number is ".$number;
    ?>
</body>
</html>