<?php

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
			'$comment'
		)";

        if ($conn->query($sql)) {
            // echo "Inserted succesfuly";
        } else {
            // $error_message =  "Error inserting data: " . $conn->error;
            // echo $error_message;
        }

        $conn->close();
    }

    // read
    function fetch_testimonials()
    {
        global $conn;
        $sql = "SELECT * FROM `testimonial` ORDER BY `id` DESC LIMIT 10";
        $result = $conn->query($sql);
        return $result;
    }

    // update model

    // delete from model
}
