<?php
    require_once "classes/DBAccess.php";        

    $title = "delete data";
    $pageHeading = "categories";

    //get database settings
    include "settings/db.php";

    //create database object
    $db = new DBAccess($dsn, $username, $password);

    //connect to database
    $pdo = $db->connect();
    $message = "";

    if(!empty($_GET["id"]))
    {        
        $sql = "delete from Categories where CategoryID = :CategoryID";
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(":CategoryID",$_GET["id"],PDO::PARAM_INT);

        $affectedRows = $db->executeNonQuery($stmt,false);

        if($affectedRows === -1)
        {
            $message = "The category cannot be deleted because there are products associated with this category";
        }
        else 
        {
            $message = "The category was deleted";
        }
    }

    $sql = "select CategoryID,Description,CategoryName from categories";
    $stmt = $pdo->prepare($sql);
    $categoryRows =  $db->executeSQL($stmt);

    //start buffer
    ob_start();

    //display categories
    include "templates/displayCategory.html.php";

    $output = ob_get_clean();
    include "templates/layout.html.php";
?>