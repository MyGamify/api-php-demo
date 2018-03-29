<?php
	include "config.php";
	include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Demo API myGamify</title>
	<link rel="apple-touch-icon" sizes="180x180" href="https://www.my-gamify.fr/img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="https://www.my-gamify.fr/img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="192x192" href="https://www.my-gamify.fr/img/favicon/android-chrome-192x192.png">
	<link rel="icon" type="image/png" sizes="16x16" href="https://www.my-gamify.fr/img/favicon/favicon-16x16.png">
	<link rel="manifest" href="https://www.my-gamify.fr/img/favicon/site.webmanifest">
	<link rel="mask-icon" href="https://www.my-gamify.fr/img/favicon/safari-pinned-tab.svg" color="#f39c12">
	<meta name="msapplication-TileColor" content="#2b5797">
	<meta name="msapplication-TileImage" content="/mstile-144x144.png">
	<meta name="theme-color" content="#ffffff">
</head>
<body>
	<div class="api-demo-container">
		<h1>Test API Gamify</h1>
		<?php
			include "apiDemo.php"
		?>
	</div>
</body>
</html>