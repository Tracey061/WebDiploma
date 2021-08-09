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

    function fibonacciFun($i,$j,$k)
    {    
        $fibonacciArray[0]=$i;
        $fibonacciArray[1]=$j;

        for($m=2;$m<$k+2;$m++)
        {
            $sum=$i+$j;
            $fibonacciArray[$m]=$sum;
            $i=$j;
            $j=$sum;
        }
        
        return $fibonacciArray;
    }

    $resultArray = fibonacciFun(0,1,20);

    for($i=0;$i<count($resultArray);$i++)
    {
        echo $resultArray[$i]."<br>";
    }
    ?>
</body>
</html>