<?php
$host = "localhost";
$user = "root";
$password = "Jk@jain0205jambu";
$database = "industrial_training";

$conn = mysqli_connect($host, $user, $password,
$database);
if (!$conn) {
die("Connection Failed: " . mysqli_connect_error());
}


?>