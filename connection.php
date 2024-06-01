<?php

$name = "localhost";
$username = "root";
$password = "root";
$dbname = "student";

// Create connection
$conn = new mysqli($name, $username, $password, $dbname);

// Check connection
if ($conn -> connect_error) {
    die("Connection failed: ".$conn -> connect_error);
}
?>
