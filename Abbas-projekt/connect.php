<?php 

// Create connection
$db = mysqli_connect("localhost", "root", "", "abbashodroj");

mysqli_query($db, "SET NAMES utf8");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


?>