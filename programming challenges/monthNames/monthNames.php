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
    $months[] = "January";
    $months[] = "February";
    $months[] = "March";
    $months[] = "April";
    $months[] = "May";
    $months[] = "June";
    $months[] = "July";
    $months[] = "August";
    $months[] = "September";
    $months[] = "October";
    $months[] = "November";
    $months[] = "December";
    ?>

    <ul>
    <?php for ($i=0;$i<count($months);$i++): ?>
        <li><?= $months[$i]?> - has <?= strlen($months[$i]) ?> letters</li>
    <?php endfor; ?>    
    </ul>
</body>
</html>