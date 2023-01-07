<?php
session_start();
include("connect.php")
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="/assets/img/favicon.ico">

	<!--linking CSS file to HTML file -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!--discription of the website for quick parsing-->
	<meta name="REPORT" content="Semantic HTML, CSS Flex Box and Grid ">
	<title>Discover Afrobeats</title>
</head>

<body>
	<header class="header">
		<figure class="logos">
			<img src="images/logo.png" alt="html logo" Width="90">
			<a href="./index.php">
				<h3 class="disc">
					Discover Afrobeats
				</h3>
			</a>
			<nav class="sticky">
				<ul class="navigation">
					<li><a href="index.php"> Home</a></li>
					<li><a href="login.php"> Login</a></li>
					<li><a href="signup.php"> Sign Up</a></li>
					<li><a href="contact_us.php"> Contact Us</a></li>
				</ul>
			</nav>
	</header>

	<!-- js utility functions -->
	<script>
		function redirect_user(page) {
			window.location.assign(page);
		}

		function send_alert(message) {
			window.alert(message);
		}
	</script>