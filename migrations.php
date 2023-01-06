<?php
include("connect.php");

// run migrations
UserModel::up();
TrackModel::up();
ContactModel::up();
TestimonialModel::up();
