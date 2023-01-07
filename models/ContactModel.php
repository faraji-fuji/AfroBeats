<?php

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
