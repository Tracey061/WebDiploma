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
    require_once("classes/Student.php");

    // $student1 = new Student();
    // $student1->firstName = "John";
    // $student1->lastName = "Smith";
    $student1 = new Student("John","Smith");
    $student1->course = "web diploma";
    $student1->units = 20;
    ?>

    <p>hello, <?= $student1->firstName ?> <?= $student1->lastName ?> you are enrolled in <?= $student1->course ?> </p>

    <p>the current completion is <?= $student1->getCompletion() ?> %</p>

    <?php while($student1->completeUnit("AC") == "Not course complete"):?>
        <p>the new completion is <?= $student1->getCompletion() ?>% </p>
    <?php endwhile; ?>

    <p>congraduations!! the final completion is <?= $student1->getCompletion() ?>% </p>

</body>
</html>