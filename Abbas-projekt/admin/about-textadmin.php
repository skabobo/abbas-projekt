<?php
$db = mysqli_connect("localhost", "root", "", "abbashodroj");
mysqli_query($db, "SET NAMES utf8");


/********************************************************
Kod för att uppdatera befintlig text i CV:et
********************************************************/ 

if(isset($_POST["id"])) {
	$new_aboutme = mysqli_real_escape_string($db, $_POST['about_me']);
	$id = mysqli_real_escape_string($db, $_POST['id']);
	$query = "UPDATE about_me SET page_content = '$new_aboutme' WHERE id = $id";
	mysqli_query($db, $query);   
}



if(isset($_POST["id2"])) {
	$new_heading = mysqli_real_escape_string($db, $_POST['cv-heading']);
	$new_year = mysqli_real_escape_string($db, $_POST['cv-year']);
	$new_text = mysqli_real_escape_string($db, $_POST['cv-text']);
	$id2 = mysqli_real_escape_string($db, $_POST['id2']);
	$query = "UPDATE education_table SET heading_text = '$new_heading', heading_year = '$new_year', page_content = '$new_text' WHERE id = $id2";
	mysqli_query($db, $query);   
}

 
if(isset($_POST["id3"])) {
	$new_heading2 = mysqli_real_escape_string($db, $_POST['cv-heading2']);
	$new_year2 = mysqli_real_escape_string($db, $_POST['cv-year2']);
	$new_text2 = mysqli_real_escape_string($db, $_POST['cv-text2']);
	$id3 = mysqli_real_escape_string($db, $_POST['id3']);
	$query = "UPDATE job_table SET heading_text = '$new_heading2', heading_year = '$new_year2', page_content = '$new_text2' WHERE id = $id3";
	mysqli_query($db, $query);   
}


/****************************************************************
Kod för att sätta in ny text i databasen för att visas på CV:et.
****************************************************************/ 


if  (isset($_POST['insert_db_heading'])
&& isset($_POST['insert_db_year'])
&& isset($_POST['insert_db_text'])) {
	
	// escape variables for security
	$name = mysqli_real_escape_string($db, $_POST['insert_db_heading']);
	$email= mysqli_real_escape_string($db, $_POST['insert_db_year']);
	$tel = mysqli_real_escape_string($db, $_POST['insert_db_text']);
	
	// attempt insert query execution
	$sql = "INSERT into education_table (heading_text, heading_year, page_content)
	VALUES ('$name', '$email', '$tel')
	";

	if ($db->query($sql) === TRUE) {
		header("Location: indexadmin.php?page=about");
	}
}



if  (isset($_POST['insert_db_heading2'])
&& isset($_POST['insert_db_year2'])
&& isset($_POST['insert_db_text2'])) {
	
	// escape variables for security
	$name = mysqli_real_escape_string($db, $_POST['insert_db_heading2']);
	$email= mysqli_real_escape_string($db, $_POST['insert_db_year2']);
	$tel = mysqli_real_escape_string($db, $_POST['insert_db_text2']);
	
	// attempt insert query execution
	$sql = "INSERT into job_table (heading_text, heading_year, page_content)
	VALUES ('$name', '$email', '$tel')
	";

	if ($db->query($sql) === TRUE) {
		header("Location: indexadmin.php?page=about");
	}
}


?>