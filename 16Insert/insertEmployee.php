<?php
    require_once "classes/DBAccess.php";        

    $title = "Insert employee";
    $pageHeading = "Insert employee";

    //get database settings
    include "settings/db.php";

    //create database object
    $db = new DBAccess($dsn, $username, $password);

    //connect to database
    $pdo = $db->connect();
    
    $message = "";
    $error = false;

    if(isset($_POST["submit"]))
    {
        if(isset($_POST["firstName"]) && isset($_POST["lastName"]) && isset($_POST["notes"]))
        {
            $targetDirectory = "images/";
            $photoPath = basename($_FILES["photoPath"]["name"]);
            $targetFile= $targetDirectory.$photoPath;

            $imageFileType = pathinfo($targetFile,PATHINFO_EXTENSION);

            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType!= "jpeg" && $imageFileType != "gif" )
            {
                $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $error = true;
            }
            
            if ($_FILES["photoPath"]["error"] == 1)
            {
                $message = "Sorry, your file is too large. Max of 2M is allowed.";
                $error = true;
            }
    
            if ($error == false)
            {
                if (move_uploaded_file($_FILES["photoPath"]["tmp_name"],$targetFile))
                {
                    $message = "The file $photoPath has been uploaded.";
                }
                else
                {
                    $message = "Sorry, there was an error uploading your file. Error code:".$_FILES["photoPath"]["error"];

                    $photoPath = "";
                }
            }
            else
            {
                $photoPath = "";
            }

            $photoPath = "images/bradJones.jpg";

            $sql = "insert into employees(FirstName,LastName,Notes,PhotoPath) VALUES(:FirstName,:LastName,:Notes,:PhotoPath)";

            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":FirstName",$_POST["firstName"],PDO::PARAM_STR);
            $stmt->bindValue(":LastName",$_POST["lastName"],PDO::PARAM_STR);
            $stmt->bindValue(":Notes",$_POST["notes"],PDO::PARAM_STR);
            $stmt->bindValue(":PhotoPath",$photoPath,PDO::PARAM_STR);

            $id = $db->executeNonQuery($stmt,true);
            $message = "the employee was added, id:".$id;
        }
    }        

    //start buffer
    ob_start();

    //display results
    include "templates/employeeForm.html.php";
    $output = ob_get_clean();
    include "templates/layout.html.php";
?>