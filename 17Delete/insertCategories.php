<?php
    require_once "classes/DBAccess.php";        
    $title = "Insert data";
    $pageHeading = "Insert categories";

    //get database settings
    include "settings/db.php";

    //create database object
    $db = new DBAccess($dsn, $username, $password);

    //connect to database
    $pdo = $db->connect();

    $message = "";

    if(isset($_POST["submit"]))
    {
        // echo "the submit"."<br>";

        // $_POST["CategoryName"] = "new";
        if(!empty($_POST["CategoryName"]))
        {
            // echo "CategoryName is not empty"."<br>";
            //set up query to execute
            $sql = "INSERT INTO categories (CategoryName, Description) VALUES (:CategoryName, :Description)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":CategoryName",$_POST["CategoryName"],PDO::PARAM_STR);
            $stmt->bindValue(":Description",$_POST["Description"],PDO::PARAM_STR);

            //execute SQL query
            // echo "execute SQL query";
            $id = $db->executeNonQuery($stmt,true);
            $message = "the category was added, id:".$id;
        }
        else
        {
            echo "Please input a categoryname"."<br>";

        }
    }

    $sql = "select CategoryID,CategoryName,Description from categories";
    $stmt = $pdo->prepare($sql);
    $rows = $db->executeSQL($stmt);

    //start buffer
    ob_start();

    //display categories
    include "templates/categoryList.html.php";

    //display results
    include "templates/categoryForm.html.php";
    $output = ob_get_clean();
    include "templates/layout.html.php";
?>