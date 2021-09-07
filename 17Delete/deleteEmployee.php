<?php
    require_once "classes/DBAccess.php";        

    $title = "delete data";
    $pageHeading = "employees";

    //get database settings
    include "settings/db.php";

    //create database object
    $db = new DBAccess($dsn, $username, $password);

    //connect to database
    $pdo = $db->connect();
    $message = "";

    if(!empty($_GET["id"]) && (!empty($_GET["photo"])))
    {
        $idd = $_GET["id"];
        echo $idd;
        
        $sql = "delete from employees where employeeID = :employeeID";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":employeeID",$_GET["id"],PDO::PARAM_INT);

        $db->executeNonQuery($stmt,false);
        $message = "The employee was deleted";

        if ($_GET["photo"] != "none")
        {
            $file = "images/".$_GET["photo"];

            if(!unlink($file))
            {
                $message = "error deleting $file";
            }
            else
            {
                $message = "the employee and photo were deleted";
            }
        }
    }

    $sql = "select employeeId,firstName,lastName,photoPath from Employees";
    $stmt = $pdo->prepare($sql);
    $employeeRows =  $db->executeSQL($stmt);

    //start buffer
    ob_start();

    //display categories
    include "templates/displayEmployees.html.php";

    $output = ob_get_clean();
    include "templates/layout.html.php";
?>