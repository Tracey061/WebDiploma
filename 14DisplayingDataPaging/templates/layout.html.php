<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?= $title ?></title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<style>
		.employee {
			/* background: yellowgreen; */
			display: flex;
			justify-content: center;
			flex-direction: column;
		}

		.employee p {
			margin-left: 20px;
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