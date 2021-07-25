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
// the practice of weekdays
$daysOfTheWeek = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"];
for ($i=0;$i<5;$i++)
{
    echo $daysOfTheWeek[$i]."<br>";
}

// the practice of associative array
$courses = ["title"=>"web diploma", "code"=>"ICA50611", "VERSION"=>2];
echo $courses["VERSION"]."<br>";
echo "the len of courses is ".count($courses)."<br>";

// the practice of months
$monsOfTheYear = ["January", "February", "March", "April", "May"];
$monsOfTheYear[5] = "June";
$monsOfTheYear[] = "July";

print_r($monsOfTheYear);

$arrayString = print_r($monsOfTheYear,true);
echo "<br>"."the arraystring is ".$arrayString."<br>";
echo "the len of monsOfTheYear is ".count($monsOfTheYear)."<br>";

for ($j=0;$j<count($monsOfTheYear);$j++)
{
    echo $j.$monsOfTheYear[$j]."<br>";
}

// The end of PHP
?>


<!-- the begin of HTML -->
<!-- disyplay the weekdays as a bulleted list -->
<ul>
    <li><?php echo $daysOfTheWeek[0] ?></li>
    <li><?=$daysOfTheWeek[1]?></li>
    <li><?=$daysOfTheWeek[2]?></li>
    <li><?=$daysOfTheWeek[3]?></li>
    <li><?=$daysOfTheWeek[4]?></li>
</ul>
</body>
</html>
