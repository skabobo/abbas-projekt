<?php
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
if (isset($_POST['submit'])) {
if (empty($_POST['username']) || empty($_POST['password'])) {
$error = "Användarnamnet eller lösenordet är felaktigt";
}
else
{

// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "", "abbashodroj");
// Define $username and $password
$username=$_POST['username'];
$password=$_POST['password'];

// To protect from MySQL injection
$username = stripslashes($username);
$password = stripslashes($password);
$username = mysqli_real_escape_string($connection, $username);
$password = mysqli_real_escape_string($connection, $password);
$password = md5($password);
// SQL query to fetch information of registerd users and finds user match.
$query = "select * from login where password='$password' AND username='$username'";
$rows = mysqli_query($connection, $query);
if ($rows == 1) {
$_SESSION['login_user']=$username; // Initializing Session
header("location: homeadmin.php"); // Redirecting To Other Page
} else {
$error = "Användarnamnet eller lösenordet är felaktigt";
}
mysqli_close($connection); // Closing Connection
}
}


?>