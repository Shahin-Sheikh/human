<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "company");
session_start();// Starting Session
// Storing Session
//$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$query = "SELECT fullname, email, mobile, position, gender, bondho, days FROM chuti";
$ses_sql = mysqli_query($conn, $query);

?>