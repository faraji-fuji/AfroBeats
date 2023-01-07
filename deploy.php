<?php
include("credentials.php");

function create_database($server_name, $user_name, $password)
{
    // create connection
    $conn = new mysqli($server_name, $user_name, $password);

    // check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->error);
    }

    $sql = "CREATE DATABASE music";

    if ($conn->query($sql) === TRUE) {
        echo "Database created successfuly.";
        return TRUE;
    } else {
        echo "Error creatig database" . $conn->error;
        return FALSE;
    }
}

// create database if running site for the first time
create_database($server_name, $user_name, $password);

include("connect.php");

// create table|models
UserModel::up();
UserModel::seed();
TrackModel::up();
TrackModel::seed();
ContactModel::up();
TestimonialModel::up();
