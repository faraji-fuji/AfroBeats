<?php
session_start();

include("connect.php")
?>

<!DOCTYPE html>
<html lang="en">

<body>

	<head>
		<!--lining CSS file to HTML file -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<meta charset="UTF-8">
		<!--discription of the website for quick parsing-->
		<meta name="REPORT" content="Semantic HTML, CSS Flex Box and Grid ">
		<link rel="icon" type="image/png" href="favicon.ico">

		<title>Discover Afrobeats</title>
	</head>

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