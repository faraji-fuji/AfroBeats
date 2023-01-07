<?php

class TrackModel extends Model
{
    // create model
    public static function up()
    {
        global $conn;

        $sql = "CREATE TABLE `track`(
			`id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,

			`name` VARCHAR(50) NOT NULL,
			`artiste` VARCHAR(50) NOT NULL,
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
        $album =    $data['album'];

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

    // seed
    public static function seed()
    {
        global $conn;
        $sql = "INSERT INTO `track`
            (`name`, `artiste`, `album`) 
        VALUES
            ('Rush', 'Ayra Starr', '19 & Dangerous'),
            ('23', 'Burna Boy', 'Twice As Tall')
        ";

        if ($conn->query($sql)) {
            echo "Inserted succesfuly";
        } else {
            echo "Error inserting data: " . $conn->error;
        }
    }


    // read
    function fetch_tracks()
    {
        global $conn;
        $sql = "SELECT * FROM `track` ORDER BY `id` DESC LIMIT 10";
        $result = $conn->query($sql);
        return $result;
    }



    // update from model

    // delete from model
}
