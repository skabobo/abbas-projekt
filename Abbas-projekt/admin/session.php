<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection = mysqli_connect("localhost", "root", "", "abbashodroj");
//$connection = mysqli_connect("localhost", "root", "", "company");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// Query To Fetch Complete Information Of User
$query = "select username from login where username='$user_check'";
$ses_sql=mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysqli_close($connection); // Closing Connection
header('Location: ../index.php?page=admin'); // Redirecting To Home Page
}
?> 
