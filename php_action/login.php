<?php
    //indx.php
    include('../php_action/loginauth.php'); // Includes Login Script

?>
<html>
<head>

<title>Login</title>
<link rel="stylesheet" type="text/css" href="../css/stylel.css">
<body>
    <div class="loginbox">
    <img src="../assests/img/avatar.png" class="avatar">
        <h1>Login Here</h1>
        <form action="" method="post"> 
            <p>Usertype</p>
            <select name="selectbox">
                    <option name="Admin" value="Admin">Admin</option>
                    <option name="Public" value="Public">Public</option>
                    <option name="Employee" value="Employee">Employee</option>
            </select>
            <p>Username</p>
            <input id="name" name="username" type="text" name="" placeholder="Enter Username">
            <p>Password</p>
            <input id="password" name="password" type="password" name="" placeholder="Enter Password">
            <input name="submit" type="submit" value="Login">
            <span><?php echo $error; ?></span>
            <a href="../php_action/forgotpass.php">Forgot Password?</a><br>
            <a href="../php_action/register.php">Don't have an account?</a>
        </form>
        
    </div>

</body>
</head>
</html>
