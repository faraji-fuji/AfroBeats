<?php
include("connect.php");
include("Seeder.php");

// create table/models
UserModel::up();
TrackModel::up();
ContactModel::up();
TestimonialModel::up();

// seed
Seeder::seed();
