<?php 

// Create connection
$conn = mysqli_connect("localhost", "root", "", "abbashodroj");

mysqli_query($conn, "SET NAMES utf8");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>