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

    print_r($today);
    

    $holiday = new DateTime("2021-09-20");
    $interval = $holiday->diff($today);
    // print_r($interval);

    $days = $interval->days;
    $hours = $interval->h;

    echo $hours;

    $weeks = (int)($days/7);
    echo $weeks;

    $weeksAndDays = $days%7;
    ?>
    <p>there are <?= $days?> day(s) until the next holiday</p>
    <p>there are <?= $weeks?> week(s) and <?= $weeksAndDays?> day(s) until the next holiday</p>
    </ul>
</body>
</html>