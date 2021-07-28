<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Output buffering</title>
</head>
<body>
<h1>This is before the buffering</h1>
<h2>this the h2 head</h2>
<?php
//  Turn on output buffering
 // There will be no output 
 ob_start();
 
 $code = "ICT50615";
 $name = "Web diploma";
?>
<h2>Hi, the course code is <?= $code; ?>.</h2>
<p>and the name is <?= $name; ?>.</p>
<?php
 // Put all of the above ouptut into a variable
 $content = ob_get_contents();
 
 // Erase the buffer
 ob_end_clean();
 
 // All of the data that was in the buffer is now in $content
 echo $content;
?>
<p>This is after the buffering</p>
</body>
</html>