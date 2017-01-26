<?php
// Create connection
$db = mysqli_connect("localhost", "root", "", "abbashodroj");

mysqli_query($db, "SET NAMES utf8");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

/********************************************************
Kod för att uppdatera befintlig text i CV:et
********************************************************/ 

if(isset($_POST["id"])) {
	$new_hometext = mysqli_real_escape_string($db, $_POST['home_text']);
	$id = mysqli_real_escape_string($db, $_POST['id']);
	$query = "UPDATE home SET page_content = '$new_hometext' WHERE id = $id";
	mysqli_query($db, $query);   
}
