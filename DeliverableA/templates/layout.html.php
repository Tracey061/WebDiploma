<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title><?= $title ?></title>
		<link href="css/style.css" rel="stylesheet">
	</head>

	<body>
		<header>
			<h1 class="companyLogo">Sports Warehouse</h1>
			<img class="logo-image" src="img/sportswarehouse.jpg" alt="companylogo" width="200" height="130">
		</header>

		<main>
			<p class="coming">Sports warehouse is coming soon.</p>
			<p>If you have any questions, we would love to hear from you.please complete the following information.</p>

			<section aria-label="contactform">
			<?= $output ?>
			</section>
		</main>

	</body>
</html>
