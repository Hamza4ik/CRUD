<?php

$connect = mysqli_connect("localhost:3306", "root", "", "CRUD");

if (!$connect) {
    die("Error connect to database!");
}

