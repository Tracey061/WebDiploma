<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>next tafe holiday</title>
</head>
<body>
    <ul>
    <?php
    $today = new DateTime();
    $holiday = new DateTime("2021-09-20");
    $interval = $holiday->diff($today);
    

    echo $interval->days;

    $interval->weeks = (int)($interval->days/7);
    echo $interval->weeks;
    ?>
    </ul>
</body>
</html>