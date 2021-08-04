<?php
    if(isset($redirect) && $redirect == true)
    {
        header("Location:thanks.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <header>
        <h1>Redirect</h1>
    </header>    
    <section>
        <?= $output ?>
    </section>

    <footer>
        <p>&copy; 2020</p>
    </footer>
</body>
</html>