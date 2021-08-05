<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $title ?></title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<header>
			<h1>Guess the number</h1>
			
		</header>
		<section>
		  <?= $output ?>
		  
		</section>
		<footer>
			<p>&copy; <?= date("Y") ?></p>
		</footer>
	</body>
</html>
