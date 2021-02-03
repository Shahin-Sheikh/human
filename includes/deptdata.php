<?php

$conn = mysqli_connect("localhost", "root", "", "company");

$query = "SELECT * FROM dept";
$ses_sql = mysqli_query($conn, $query);

?>