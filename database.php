<?php

$host = 'localhost';
$user = 'admin';
$password = '';
$database = 'mydb';

// Check connection
$connection = new mysqli($host, $user, $password, $database);
// mysqli_query($connection, "ALTER TABLE studentinfo AUTO_INCREMENT = 1");

if ($connection->connect_error) {
    die("Connection Failed: ".$connection->connect_error);
}
