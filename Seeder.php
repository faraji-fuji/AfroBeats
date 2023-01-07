<?php
include("connect.php");

class Seeder
{
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
}
