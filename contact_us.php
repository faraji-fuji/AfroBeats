<?php
include "header.php";

// controller
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// extract and sanitize data
	$data = [
		'name' => htmlspecialchars(stripslashes(trim($_POST['name']))),
		'email' => htmlspecialchars(stripslashes(trim($_POST['email']))),
		'phone' => htmlspecialchars(stripslashes(trim($_POST['phone']))),
		'message' => htmlspecialchars(stripslashes(trim($_POST['message'])))
	];

	// save data
	$contactmodel = new ContactModel();
	$contactmodel->insert($data);
}
?>

<!-- view -->
<h3>Let's talk.</h3>
<p>share your exciting moment and queries with us </p>
<!-- Form for sign in-->
<p> Please enter in your information:</p>
<form method="POST" action="contact_us.php">
	<p> Your Name:
		<input type="text" name="name" size="20" maxlength="40" />
	</p>

	<p>Your Email:
		<input type="email" name="email" size="20" maxlength="40" />
	</p>

	<p>Phone Number:
		<input type="phone" name="phone" id="Phone" size="20" maxlength="40" />
	</p>

	<label for="comment">Please Enter your comment:</label>
	<!-- Defines an <input> element with type text area -->
	<textarea rows="6" cols="50" name="message" id="comment"></textarea>

	<!--Creating the Send comment button using Submit-->
	<input type="submit" name="submit">
</form>
</body>

<?php include "footer.php"; ?>

</html>