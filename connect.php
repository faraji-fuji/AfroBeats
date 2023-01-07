<?php
include("credentials.php");

// create connection
$conn = new mysqli($server_name, $user_name, $password, $dbname);

// check connection
if ($conn->connect_error) {
    die("Connection failed: ") . $conn->error;
}

// autoload classes
include("autoloader.php");
