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
    $number = 1;
    
    while($number <= 10)
    {
        if($number%2 == 0)
        {
            echo "this is an even number: ".$number."<br>";
        }
        else
        {
            echo "this is an odd number: ".$number."<br>";
        }

        $number++;
    }

    echo "End of loop. number is ".$number;
    ?>
</body>
</html>