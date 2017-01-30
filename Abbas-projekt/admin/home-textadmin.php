<?php

include('../connect.php');


/********************************************************
Kod för att uppdatera befintlig text på hem 
********************************************************/ 

if(isset($_POST["id"])) {
	$new_hometext = mysqli_real_escape_string($db, $_POST['home_text']);
	$id = mysqli_real_escape_string($db, $_POST['id']);
	$query = "UPDATE home SET page_content = '$new_hometext' WHERE id = $id";
	mysqli_query($db, $query);   
}
