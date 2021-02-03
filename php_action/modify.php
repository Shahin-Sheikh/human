<?php
     require_once("../client_side/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Modify Information</title>
    <link rel="stylesheet" href="../css/insertjob.css">
    <script src="../js/modify.js"></script>
</head>
<body>
<form name="contactForm" onsubmit="return validateForm()" action="../php_action/actmodify.php" method="post">
    <h2>Modify Form</h2>
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
    <input type="submit" value="Update">
    </div>
</form>
</body>
</html>