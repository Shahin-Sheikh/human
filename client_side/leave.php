<?php
     include('../php_action/leavesub.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Leave Application</title>
    <link rel="stylesheet" href="../css/leave.css">
    <script src="../js/leavevalidator.js"></script>
</head>
<body>
<form name="contactForm" onsubmit="return validateForm()" action="../php_action/leavesub.php" method="post">
    <h2>Leave Form</h2>
    <div class="row">
        <label>Full Name</label>
        <input type="text" name="fullname">
        <div class="error" id="fullnameErr"></div>
    </div>
    <div class="row">
        <label>Email Address</label>
        <input type="text" name="email">
        <div class="error" id="emailErr"></div>
    </div>
    <div class="row">
        <label>Mobile Number</label>
        <input type="text" name="mobile" maxlength="10">
        <div class="error" id="mobileErr"></div>
    </div>
    <div class="row">
        <label>Position</label>
        <select name="position">
            <option>Manager</option>
            <option>Deputy Manager</option>
            <option>Senior Software Engineer</option>
            <option>Junior Software Engineer</option>
            <option>Security Officer</option>
        </select> 
        <div class="error" id="positionErr"></div>
    </div>
    <div class="row">
        <label>Gender</label>
        <div class="form-inline">
            <label><input type="radio" name="gender" value="male"> Male</label>
            <label><input type="radio" name="gender" value="female"> Female</label> 
        </div>
        <div class="error" id="genderErr"></div>
    </div>
    <div class="row">
        <label>Which leave?</label>
        <select name="bondho">
            <option>Sick leave</option>
            <option>Casual leave</option>
            <option>Compensatory leave</option>
            <option>Maternity leave</option>
            <option>Paternity leave</option>
        </select> 
        <div class="error" id="bondhoErr"></div>
    </div>
    <div class="row">
        <label>How many days you want?</label>
        <select name="days">
            <option>5</option>
            <option>10</option>
            <option>15</option>
            <option>20</option>
            <option>30</option>
        </select> 
        <div class="error" id="daysErr"></div>
    </div>       
    <div class="row">
        <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>