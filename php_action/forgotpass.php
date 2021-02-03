<?php
     require_once("../client_side/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../css/insertjob.css">
    <script src="../js/passreset.js"></script>
</head>
<body>
<form name="contactForm" onsubmit="return validateForm()" action="../php_action/passreset.php" method="post">
    <h2>Forgot Pass Form</h2>
    <div class="row">
        <label>Usertype</label>
        <select name="usertype">
            <option>Admin</option>
            <option>Public</option>
            <option>Employee</option>
        </select> 
        <div class="error" id="usertypeErr"></div>
    </div>
    <div class="row">
        <label>Your ID</label>
        <input type="text" name="id">
        <div class="error" id="idErr"></div>
    </div>
    <div class="row">
        <label>New Password</label>
        <input type="password" name="password">
        <div class="error" id="passwordErr"></div>
    </div>
       
    <div class="row">
    <button class="btn btn-primary" name="update">Update</button>
    </div>
</form>
</body>
</html>