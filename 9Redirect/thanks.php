<?php
    $title = "Thank you very much";

    ob_start();

    include "templates/confirmation.html.php";

    $output = ob_get_clean();

    include "templates/layout.html.php";
?>