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
    $grade = "B";
    switch($grade)
    {
    case "A":
        echo "Congratulations you have a result between 90-100";
        break;
    case "B":
        echo "Good work you have a result between 75-89";
        break;
    case "C":
        echo "Well done you have a result between 50-74";
        break;
    case "F":
        echo "Sorry that's a mark between 0-49";
        break;
    default:
        echo "Incorrect grade";
        break;
    }
    ?>
</body>
</html>