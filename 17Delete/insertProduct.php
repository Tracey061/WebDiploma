<?php
    require_once "classes/DBAccess.php";        
    $title = "Insert product";
    $pageHeading = "Insert product";

    //get database settings
    include "settings/db.php";

    //create database object
    $db = new DBAccess($dsn, $username, $password);

    //connect to database
    $pdo = $db->connect();

    $sql = "select CategoryId,CategoryName from categories";
    $stmt = $pdo->prepare($sql);
    $categoryRows =  $db->executeSQL($stmt);

    $sql = "select SupplierId,CompanyName from suppliers";
    $stmt = $pdo->prepare($sql);
    $supplierRows =  $db->executeSQL($stmt);
    
    $message = "";

    if(isset($_POST["submit"]))
    {
        // echo "the submit"."<br>";

        // $_POST["CategoryName"] = "new";
        if(!empty($_POST["discontinued"]))
        {
            $discontinued = 1;
        }
        else
        {
            $discontinued = 0;
        }

        if (!empty($_POST["productName"]))
        {
            $sql = "insert into Products(ProductName, SupplierID, CategoryID, QuantityPerUnit, 
                    UnitPrice, UnitsInStock, UnitsOnOrder, ReorderLevel, Discontinued) 
                    values(:ProductName, :SupplierID, :CategoryID, :QuantityPerUnit, :UnitPrice, 
                    :UnitsInStock, :UnitsOnOrder, :ReorderLevel, :Discontinued)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(":ProductName",$_POST["productName"],PDO::PARAM_STR);
            $stmt->bindValue(":SupplierID",$_POST["supplier"],PDO::PARAM_STR);
            $stmt->bindValue(":CategoryID",$_POST["category"],PDO::PARAM_STR);
            $stmt->bindValue(":QuantityPerUnit",$_POST["qtyPerUnit"],PDO::PARAM_STR);
            $stmt->bindValue(":UnitPrice",$_POST["unitPrice"],PDO::PARAM_STR);
            $stmt->bindValue(":UnitsInStock",$_POST["unitsInStock"],PDO::PARAM_STR);
            $stmt->bindValue(":UnitsOnOrder",$_POST["unitsOnOrder"],PDO::PARAM_STR);
            $stmt->bindValue(":ReorderLevel",$_POST["reorderLevel"],PDO::PARAM_STR);
            $stmt->bindValue(":Discontinued",$discontinued,PDO::PARAM_STR);

            $id = $db->executeNonQuery($stmt,true);
            $message = "the product was added, id:".$id;
        }
    }        

    //start buffer
    ob_start();

    //display results
    include "templates/productForm.html.php";
    $output = ob_get_clean();
    include "templates/layout.html.php";
?>