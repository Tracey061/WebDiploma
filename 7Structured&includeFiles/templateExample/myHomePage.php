<!-- <?php
    //set page specific values
    $title = "Home - Lorem Ipsum";
    $page = "home";
    
    //php contact for this page
    $date = date("l jS \of F Y");

    include "include/header.php";

    include "templates/homePage.html.php";
    
    include "include/footer.php";

?> -->


<?php
    //set page specific values
    $title = "traceyPage";
    $page = "traceyPage";
    
    //php contact for this page
    $date = date("d/m/Y");

    //start the buffer
    ob_start();

    //include template for this page
    include "templates/traceyPage.html.php";

    //read the contents of the output buffer and store them 
    //in $output variable so it can be used in layout.html.php

    $output = ob_get_clean();

    include "templates/layout.html.php";


?>