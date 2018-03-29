<?php
	include "config.php";
	include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Demo API myGamify</title>
	<link rel="stylesheet" href="https://www.mygamify.fr/css/api.css">
	<link rel="apple-touch-icon" sizes="180x180" href="https://www.mygamify.fr/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="https://www.mygamify.fr/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="192x192" href="https://www.mygamify.fr/img/favicon/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="16x16" href="https://www.mygamify.fr/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="https://www.mygamify.fr/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="https://www.mygamify.fr/img/favicon/safari-pinned-tab.svg" color="#f39c12">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
	<header>
		<h1>Test API MyGamify</h1>
	</header>
	<div class="api-demo-container">
		<?php
			include "apiDemo.php"
		?>
	</div>
</body>
</html>