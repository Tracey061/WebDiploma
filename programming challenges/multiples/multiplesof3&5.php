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
    function multiples($i,$j)
    {
        if($i%$j == 0)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    

    // $m=9;
    // $n=3;

    // $output = multiples(9,3);
    // echo "9 is multiples of 3 :".multiples(9,3)."<br>";
    // include "templates/greenFor3.html.php";

    $range = 50;

    for ($i=1;$i<=$range;$i++)
    {
        // ob_start();
        if (multiples($i,3) && multiples($i,5))
        {
            // echo $i." both 3&5 multiples<br>";
            $output = $i;
            // ob_end_clean();
            include "templates/purpleForBoth.html.php";
        }
        elseif (multiples($i,3))
        {
            // echo $i." is only 3 multiple<br>";
            $output = $i;
            // ob_end_clean();
            include "templates/greenFor3.html.php";
        }
        elseif (multiples($i,5))
        {
            // echo $i." is only 5 multiple<br>";
            $output = $i;
            // ob_end_clean();
            include "templates/redFor5.html.php";
        }
    }
    ?>
</body>
</html>