<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $title ?></title>
		<link href="style.css" rel="stylesheet" type="text/css">
	</head>

	<body>
		<header>
			<h1>Dog Order Form</h1>
			<nav>
				<ul>
					<li><a href="page1.html">Our Puppies</a></li>
					<li><a href="page2.html">Contact</a></li>
					<li><a href="page3.html">Order</a></li>
				</ul>
			</nav>
		</header>
		<section>
		  <?= $output ?>
		</section>
		<footer>
			<p>&copy; <?= date("Y") ?></p>
		</footer>
	</body>
</html>
