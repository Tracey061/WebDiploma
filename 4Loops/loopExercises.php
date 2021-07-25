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
    
    //Use a for loop to display numbers 1 through to 5     
    for ($i = 1;$i <= 5;$i++)
    {
        echo "$i<br>";
    }
    echo "End of i loop. i is ".$i."<br>";

    // the numbers are displayed from 5 down to 1
    for ($j = 5;$j >= 1;$j--)
    {
        echo "$j<br>";
    }
    echo "End of j loop. j is ".$j."<br>";

    // displaying even numbers between 0 and 10 using "for"
    for ($k = 0;$k <= 10;$k++)
    {
        if($k%2 == 0)
        {
            echo "this is an even number: ".$k."<br>";
        }
    }
    echo "End of k loop. k is ".$k."<br>";

    // displaying even numbers between 0 and 10 using "while"
    $m = 0;
    while ($m <= 10)
    {
        if($m%2 == 0)
        {
            echo "this is an even number: ".$m."<br>";
        }
        $m++;
    }
    echo "End of m loop. m is ".$m."<br>";
    ?>
</body>
</html>