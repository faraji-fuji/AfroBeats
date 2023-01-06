<?php
include "header.php";

// controller
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// extract and sanitize data
	$data = [
		'name' => htmlspecialchars(stripslashes(trim($_POST['name']))),
		'email' => htmlspecialchars(stripslashes(trim($_POST['email']))),
		'password' => htmlspecialchars(stripslashes(trim($_POST['password'])))
	];

	// save data
	$usermodel = new UserModel();
	$usermodel->insert($data);
}

?>

<body>
	<h2>SIGNUP</h2>
	<form class="signup" method="POST" action="signup.php">
		<div class="signinname">
			<label for="name">Name</label>
			<input type="text" id="name" name="name">
		</div>

		<div class="signinname">
			<label for="Email">Email</label>
			<input type="email" id="Email" name="email">
		</div>

		<div class="signinname">
			<label for="Passwrod">Password</label>
			<input type="password" id="Password" name="password">
		</div>

		<input type="submit" name="submit" />
	</form>
	<?php include "footer.php"; ?>
</body>

</html>