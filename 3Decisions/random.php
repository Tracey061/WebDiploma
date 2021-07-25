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
    $diceRoll1 = rand(1,6);
    // $diceRoll2 = rand(1,6);
    echo "<p>You roll a ".$diceRoll1."</p>";

    // echo "<p>You roll a ".$diceRoll1."and a".$diceRoll2."</p>";
    // if ($diceRoll1%1 == 6 && $diceRoll2 == 6)

    if ($diceRoll1%2 == 0)
    {
        echo "<p>You win</p>";
    }
    else
    {
        echo "<p>You lose</p>";
    }

    echo "The end";
    ?>
</body>
</html>