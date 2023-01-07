<?php
$server_name = "localhost";
$user_name = "root";
$password = "";
$dbname = "music";

// creae connection
$conn = new mysqli($server_name, $user_name, $password);

// check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->error);
}

function create_database()
{
    global $conn;
    $sql = "CREATE DATABASE music";
    if ($conn->query($sql) === TRUE) {
        // echo "Database created successfuly.";
    } else {
        // echo "Error creatig database" . $conn->error;
    }
}

// create database if running site for the first time
create_database();

// create connection
$conn = new mysqli($server_name, $user_name, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: ") . $conn->error;
}

// models representing database tables
include("models.php");
