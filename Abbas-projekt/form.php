<?php

if  (isset($_POST['form_name'])
&& isset($_POST['form_phone'])
&& isset($_POST['form_email'])
&& isset($_POST['form_message'])) {
	
	// escape variables for security
	$name = mysqli_real_escape_string($db, $_POST['form_name']);
	$email= mysqli_real_escape_string($db, $_POST['form_phone']);
	$tel = mysqli_real_escape_string($db, $_POST['form_email']);
	$message = mysqli_real_escape_string($db, $_POST['form_message']);
	
	// attempt insert query execution
	$sql = "INSERT into contact_form (contact_name, contact_phone, contact_email, contact_message)
	VALUES ('$name', '$email', '$tel', '$message')
	";

	if ($db->query($sql) === TRUE) {
		echo "<script type= 'text/javascript'>alert('Tack för ditt meddelande');</script>";
	} else {
		echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
	}
}


?>