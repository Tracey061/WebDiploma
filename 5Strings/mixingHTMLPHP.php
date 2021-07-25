<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><a href="http://google.com">1Link to google</a></p>
    <p><a href='http://google.com'>2Link to google</a></p>    

    <?php
    echo "<p><a href='http://google.com'>3link to google</a></p>";
    // echo "<p><a href="http://google.com">4link to google</a></p>";
    echo '<p><a href="http://google.com">5link to google</a></p>';

    $urlValue = "http://google.com";
    echo "<p><a href=\"$urlValue\">6link to google</a></p>";
    echo "<p><a href=$urlValue>7link to google</a></p>";
    ?>
    
    <p><a href="<?= $urlValue ?>">8link to google</a></p>
    <p><a href=<?php echo $urlValue; ?>>9link to google</a></p>
</body>
</html>