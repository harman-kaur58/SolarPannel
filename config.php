<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="solar_pannel";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $databasename);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// echo "Connected successfully";
?>