<?php
     require_once("../client_side/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leave Application</title>
    <link rel="stylesheet" href="../css/insertjob.css">
    <script src="../js/modify.js"></script>
</head>
<body>
<form name="contactForm" onsubmit="return validateForm()" action="../php_action/actmodify.php" method="post">
    <h2>Leave Form</h2>
    <div class="row">
        <label>Your ID</label>
        <input type="text" name="id">
        <div class="error" id="idErr"></div>
    </div>
    <div class="row">
        <label>New Email</label>
        <input type="text" name="email">
        <div class="error" id="emailErr"></div>
    </div>
   
    <div class="row">
        <label>New Username</label>
        <input type="text" name="username">
        <div class="error" id="usernameErr"></div>
    </div>
       
    <div class="row">
    <button class="btn btn-primary" name="update">Update</button>
    </div>
</form>
</body>
</html>