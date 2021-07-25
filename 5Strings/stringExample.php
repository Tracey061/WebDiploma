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
    $output = "This string has a comma at the end,";
    $string1 = "      some text here     ";
    echo "<pre>";
    echo "[" . $string1 . "]<br>";
    echo "[" . trim($string1) . "]<br>";
    echo "[" . ltrim($string1) . "]<br>";
    echo "[" . rtrim($string1) . "]<br>";

    echo "$output<br>";
    $output = rtrim($output,",");
    echo "$output";
    // echo "</pre>"; 

    // $course = 'WebDevelopment';

    // echo '1 you are in the $course course<br>';
    // echo "2 you are in the $course\n course <br>";
    // echo "3 You are studying the $course 
    //  course<br>";

    // echo '4 You are in the "'.$course.'"course <br>';
    // echo "5 You are in the \"$course\" course <br>";
    // echo "the string is ".strlen($course)." characters long";
    ?>
</body>
</html>