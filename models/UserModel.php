<?php

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
        $password = $data['password'];

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

    /**
     * seed: populate the database table with default rows
     */
    public static function seed()
    {
        global $conn;

        $sql = "INSERT INTO `user`(
            `name`,
            `email`,
            `password`
        ) VALUES(
            'admin',
            'admin@afrobeats.com',
            '1234'
        )";

        if ($conn->query($sql)) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    // read model
    /**
     * fetch_user_data($email): fetch user data that matches provided email
     *
     * Params:
     * $email: email to match
     *
     * Returns:
     * An associative array containing a user record
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
