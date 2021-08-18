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

    for($m=2;$m<=100;$m++)
    {
        $isPrime = true;
        $halfNumber = $m/2;
        for($i=2;$i<=$halfNumber;$i++)
        {
            if($m%$i === 0)
            {
                $isPrime = false;
                break;
            }        
            
        }

        if($isPrime)
        {
            echo $m."<br>";
        }
    }

    ?>
</body>
</html>