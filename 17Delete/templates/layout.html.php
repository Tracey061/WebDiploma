<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<style type="text/css">
		body {
			background-color: yellow;
		}

		article {
			display: flex;
		}

		.employeeDetails img{
			display: block;
			/* float: left; */
		}
	</style>

</head>
<body>
	<div id="wrapper">
		<h1><?= $pageHeading ?></h1>
		<?= $output ?>	
	</div>
</body>
</html>