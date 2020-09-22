<?php
// mysqli_connect() function opens a new connection to the MySQL server.
$conn = mysqli_connect("localhost", "root", "", "company");
//session_start();// Starting Session
// Storing Session
//$user_check = $_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
//$query = "SELECT dept_num, dept_mame, dept_leader FROM dept";
$query = "SELECT id, empid, empname, emprole, empdept FROM emp";
$ses_sql = mysqli_query($conn, $query);

?>