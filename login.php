<?php
include "header.php";

/**
 * login($email): login logic for matching email
 * 
 * Params:
 * 	$email: email to login
 */
function login($email)
{
	$usermodel = new UserModel();
	// fetch and save user data in session
	$_SESSION['user_data'] = $usermodel->fetch_user_data($email);
}
?>




<?php
// controller
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	$usermodel = new UserModel();

	$email = $_POST['email'];
	$password = $_POST['password'];

	if ($usermodel->select_item('password', 'email', $email) === $password) {
		login($email);
		echo "<script> redirect_user('dashboard.php') </script>";
	} else {
		echo "<script> send_alert('Incorrect Username or Password') </script>";
	}
}

?>
<!-- Form for sign in-->
<p> Please enter in your information:</p>
<form method="POST" action="login.php">
	<p>
		Email:
		<input type="text" name="email" size="20" maxlength="40" />
	</p>
	<p>
		Password:
		<input type="password" name="password" size="20" maxlength="40" />
	</p>
	<input type="submit" name="submit">
</form>
</body>

<?php include "footer.php"; ?>




</html>