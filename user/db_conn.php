<?php
$servername = "localhost";
$username = "ayep";
$password = "mysql@2023";
$dbname = "gest";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}