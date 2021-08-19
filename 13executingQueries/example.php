<?php
ob_start();
?>
<a href="example.html.php?id=3">example.php</a>
<?php $output = ob_get_clean();
include "templates/layout.html.php";
?>
