<?php
	include("config.php");

	$domain = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
?><!DOCTYPE html>
<html>
<head>
	<!-- Designed by Jake Hamblin in Dayton, Ohio. This design is a free release that can be found on https://jakehamblin.com/github -->
	<title><?php echo $name ?></title>
	<link rel="icon" type="image/png" href="<?php echo $logo ?>" />
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-0c38nfCMzF8w8DBI+9nTWzApOpr1z0WuyswL4y6x/2ZTtmj/Ki5TedKeUcFusC/k" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="css/main.css">
	<meta name="theme-color" content="#<?php echo $color ?>">
	<meta name="twitter:card" content="summary">
	<meta name="twitter:creator" content="@jekeltor">
	<meta property="og:url" content="<?php echo $domain ?>">
	<meta property="og:title" content="<?php echo $name ?>">
	<meta property="og:description" content="<?php echo $description ?>">
	<meta property="og:image" content="<?php echo $logo ?>">
	<script>
		window.onload = function() { 
			document.querySelector(".card").classList.add("loaded");
		}
	</script>
	<style>
		:root {
			--main-color: #<?php echo $color ?>;
			--logo: url(<?php echo $logo ?>);
			--gradient-one: #<?php echo $gradientcolor1 ?>;
			--gradient-two: #<?php echo $gradientcolor2 ?>;
		}
	</style>
</head>
<body>
	<section class="card">
		<div class="avatar">
		</div>
		<div class="information">
			<h1><?php echo $name ?></h1>
			<h2><?php echo $description ?></h2>
			<div class="socialmedia">
				<?php 
					foreach ($socialmedia as $link => $classes) {
				?>
					<a href="<?php echo $link ?>"><i class="<?php echo $classes ?>"></i></a>
				<?php
					}
				?>
			</div>
		</div>
	</section>
</body>
</html>
