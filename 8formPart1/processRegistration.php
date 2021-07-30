<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>processRegistration</title>
    <!-- <link href="style.css" rel="stylesheet"> -->
</head>
<body>
    <?php

    // if (isset(trim($_POST["lastName"])) && strlen(trim($_POST["lastName"])) > 1)  why no trim???
    $trimlast = trim($_POST["lastName"]);
    $issetlast = isset($_POST["lastName"]);
    $issettrimlast = isset(trim($_POST["lastName"]);
    echo "lastname is "."[".$_POST["lastName"]."]";
    echo "trim of lastname is "."[".$trimlast."]";
    echo "isset of lastname is "."[".$issetlast."]";
    echo "isset of (trim of lastname) is "."[".$issettrimlast."]";


    if (empty(trim($_POST["firstName"])))
    {
        $firstName = "value not supplied";
    }
    else
    {
        $firstName = $_POST["firstName"];
    }

    // if (isset(trim($_POST["lastName"])) && strlen(trim($_POST["lastName"])) > 1)  why no trim???
    if(isset($_POST["lastName"]) && strlen($_POST["lastName"]) > 0)
    {
        $lastName = $_POST["lastName"];
    }
    else
    {
        $lastName = "please input lastName";
    }

    if (empty(trim($_POST["password1"])))
    {
        $password1 = "please input password";
    }
    else
    {
        $password1 = $_POST["password1"];
    }

    // if (isset(trim($_POST["password2"])))
    if (isset($_POST["password2"]))
    {
        $password2 = $_POST["password2"];
    }
    else
    {
        $password2 = "please input password again";
    }

    if (empty($_POST["mode"]))
    {
        $mode = "not supplied";
    }
    else
    {
        $mode = $_POST["mode"];
    }

    // if (isset($_POST["mode"]))
    // {
    //     $mode = $_POST["mode"];
    // }
    // else
    // {
    //     $mode = "not supplied";
    // }

    if(array_key_exists("newsletter",$_POST))
    {
        $newsletter = $_POST["newsletter"];
    }
    else
    {
        $newsletter = "no";
    }

    $coursesStudied = "";
    $newsletters = "";

    if(isset($_POST["course"]))
    {
        foreach($_POST["course"] as $course)
        {
            $coursesStudied = $coursesStudied . $course . ",";
        }
    }

    $coursesStudied = trim($coursesStudied,",");

    if(isset($_POST["newsletter"]))
    {
        foreach($_POST["newsletter"] as $newsletter)
        {
            $newsletters = $newsletters . $newsletter . ",";
        }
    }
    $newsletters = trim($newsletters,",");

    

    ?>
    <main>
        <h1>Thank you</h1>
        <p>Thank you for registering. Here is the information you submitted:</p>
        <dl>
            <dt>First name</dt>
            <dd><?= $firstName ?></dd>

            <dt>Last name</dt>
            <dd><?= $lastName ?></dd>

            <dt>Password</dt>
            <dd><?= $password1 ?></dd>

            <dt>Retyped password</dt>
            <dd><?= $_POST["password2"]?></dd>

            <dt>Study Mode</dt>
            <!-- <dd><?= $_POST["mode"]?></dd> -->
            <dd><?= $mode?></dd>

            <dt>Course</dt>
            <dd><?= $coursesStudied ?></dd>

            <dt>Do you want to receive our newsletter?</dt>
            <!-- <dd><?= $_POST["newsletter"]?></dd> -->
            <dd><?= $newsletters ?></dd>
            
            <dt>Comments</dt>
            <dd><?= $_POST["comments"]?></dd>
        </dl>
    </main>
</body>
</html>