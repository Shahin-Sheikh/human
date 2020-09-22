<?php
session_start();
if(session_destroy()) // Destroying All Sessions {
header("Location: ../client_side/FirstPage.php"); // Redirecting To Home Page
?>