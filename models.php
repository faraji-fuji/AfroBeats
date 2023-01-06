<?php

/**
 * Model: Base Model Class
 */
class Model
{
	/**
	 * select_item($column1, $column2, $value): Generic method to get an item
	 *  from a table/model
	 * 
	 * Params:
	 *  $column: The  column from which to select data
	 *  $row: 
	 *  $value:
	 * 
	 * Returns:
	 *  $item: if succesful
	 *  False: if an error occurs
	 */
	function select_item($column1, $column2, $value)
	{
		global $conn;
		$sql = "SELECT `$column1` FROM `user` WHERE `$column2` = '$value'";
		$result = $conn->query($sql);
		if ($result) {
			$data = $result->fetch_assoc();
			$item = $data[$column1];
			return $item;
		}
		return FALSE;
	}
}

/**
 * UserModel: A class that represents user table
 */
class UserModel extends Model
{
	// create model
	public static function up()
	{
		global $conn;

		$sql = "CREATE TABLE `user`(
			`id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			`name` VARCHAR(50) NOT NULL,
			`email` VARCHAR(50) NOT NULL,
			`password` VARCHAR(50) NOT NULL
		)";

		if ($conn->query($sql) === TRUE) {
			echo "Table created succesfuly";
		} else {
			echo "Error creating table: " . $conn->error;
		}
	}

	// delete model
	public static function down()
	{
		global $conn;
		$sql = "DROP TABLE user";
		$conn->query($sql);
	}

	// insert into model
	function insert($data)
	{
		global $conn;

		$name = $data['name'];
		$email = $data['email'];
		$password =	$data['password'];

		$sql = "INSERT INTO `user`(
			`name`,
			`email`,
			`password`
		) VALUES(
			'$name',
			'$email',
			'$password'
		)";

		if ($conn->query($sql)) {
			echo "Inserted succesfuly";
		} else {
			echo "Error inserting data: " . $conn->error;
		}

		$conn->close();
	}

	// read model
	/**
	 * fetch_user_data($email): fetch user data that matches provided email
	 * 
	 * Params:
	 * 	$email: email to match
	 * 
	 * Returns:
	 * 	An associative array containing a user record
	 */
	function fetch_user_data($email)
	{
		global $conn;
		$sql = "SELECT * FROM `user` WHERE `email` = '$email'";
		$result = $conn->query($sql);
		if ($result) {
			$row = $result->fetch_assoc();

			$data = [
				"id" => $row['id'],
				"name" => $row['name'],
				"email" => $row['email'],
			];

			return $data;
		} else {
			return FALSE;
		}
	}



	// update from model

	// delete from model
}

class TrackModel extends Model
{
	// create model
	public static function up()
	{
		global $conn;

		$sql = "CREATE TABLE `track`(
			`id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

			`name` VARCHAR(50) NOT NULL,
			`artise` VARCHAR(50) NOT NULL,
			`album` VARCHAR(50) NOT NULL
			-- `created_at` 
			-- `updated_at`
		)";

		if ($conn->query($sql) === TRUE) {
			echo "Table created succesfuly";
		} else {
			echo "Error creating table: " . $conn->error;
		}
	}

	// delete model
	public static function down()
	{
		global $conn;
		$sql = "DROP TABLE `track`";
		$conn->query($sql);
	}

	// insert into model
	function insert($data)
	{
		global $conn;

		$name = $data['name'];
		$artiste = $data['artiste'];
		$album =	$data['album'];

		$sql = "INSERT INTO `track`(
			`name`,
			`artiste`,
			`album`
		) VALUES(
			'$name',
			'$artiste',
			'$album'
		)";

		if ($conn->query($sql)) {
			echo "Inserted succesfuly";
		} else {
			echo "Error inserting data: " . $conn->error;
		}

		$conn->close();
	}

	// update from model

	// delete from model
}


class ContactModel extends Model
{
	// create model
	public static function up()
	{
		global $conn;

		$sql = "CREATE TABLE `contact`(
			`id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

			`name` VARCHAR(50) NOT NULL,
			`email` VARCHAR(50) NOT NULL,
			`phone` VARCHAR(15) NOT NULL,
			`message` VARCHAR(200) NOT NULL

			-- `created_at` 
			-- `updated_at`
		)";

		if ($conn->query($sql) === TRUE) {
			echo "Table created succesfuly";
		} else {
			echo "Error creating table: " . $conn->error;
		}
	}

	// delete model
	public static function down()
	{
		global $conn;
		$sql = "DROP TABLE `contact`";
		$conn->query($sql);
	}

	// insert into model
	function insert($data)
	{
		global $conn;

		$name = $data['name'];
		$email = $data['email'];
		$phone = $data['phone'];
		$message = $data['message'];

		$sql = "INSERT INTO `contact`(
			`name`,
			`email`,
			`phone`,
			`message`
		) VALUES(
			'$name',
			'$email',
			'$phone',
			'$message'
		)";

		if ($conn->query($sql)) {
			// echo "Inserted succesfuly";
		} else {
			// echo "Error inserting data: " . $conn->error;
		}

		$conn->close();
	}

	// update model

	// delete from model
}

class TestimonialModel extends Model
{
	// create model
	public static function up()
	{
		global $conn;

		$sql = "CREATE TABLE `testimonial`(
			`id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

			`name` VARCHAR(50) NOT NULL,
			`comment` VARCHAR(50) NOT NULL
			
			-- `created_at` 
			-- `updated_at`
		)";

		if ($conn->query($sql) === TRUE) {
			echo "Table created succesfuly";
		} else {
			echo "Error creating table: " . $conn->error;
		}
	}

	// delete model
	public static function down()
	{
		global $conn;
		$sql = "DROP TABLE `testimonial`";
		$conn->query($sql);
	}

	// insert into model
	function insert($data)
	{
		global $conn;

		$name = $data['name'];
		$comment = $data['comment'];

		$sql = "INSERT INTO `testimonial`(
			`name`,
			`comment`
		) VALUES(
			'$name',
			'$comment',
		)";

		if ($conn->query($sql)) {
			// echo "Inserted succesfuly";
		} else {
			// $error_message =  "Error inserting data: " . $conn->error;
			// echo $error_message;
		}

		$conn->close();
	}

	// update model

	// delete from model
}
