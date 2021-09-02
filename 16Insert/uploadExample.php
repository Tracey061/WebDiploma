<?php

    $title = "Upload";
    $pageHeading = "Uploading a file";

    $message = "";
    $error = false;    

    if(isset($_POST["submit"]))
    {
        $targetDirectory = "images/";

        $fileName = basename($_FILES["fileToUpload"]["name"]);

        $targetFile= $targetDirectory.$fileName;

        $imageFileType = pathinfo($targetFile,PATHINFO_EXTENSION);


        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType!= "jpeg" && $imageFileType != "gif" )
        {
            $message = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $error = true;
        }
        
        if ($_FILES["fileToUpload"]["error"] == 1)
        {
            $message = "Sorry, your file is too large. Max of 2M is allowed.";
            $error = true;
        }

        if ($error == false)
        {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],$targetFile))
            {
                $message = "The file $fileName has been uploaded.";
            }
            else
            {
                $message = "Sorry, there was an error uploading your file. Error code:".$_FILES["fileToUpload"]["error"];
            }
        }
    }        

    //start buffer
    ob_start();

    //display results
    include "templates/uploadForm.html.php";
    $output = ob_get_clean();
    include "templates/layout.html.php";
?>