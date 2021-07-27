<?php
    //set page specific values
    $title = "Reviews - Lorem Ipsum";
    $page = "reviews";
    
    //php contact for this page
    $reviewsDate = date("D d M Y");

    //start the buffer
    ob_start();

    //include template for this page
    include "templates/reviews.html.php";

    //read the contents of the output buffer and store them 
    //in $output variable so it can be used in layout.html.php

    $output = ob_get_clean();

    include "templates/layout.html.php";


?>