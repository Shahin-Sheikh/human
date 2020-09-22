<?php
 include('../php_action/confirmation.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Insert New Job</title>
    <link rel="stylesheet" href="../css/insertjob.css">
    <script src="../js/validator.js"></script>
</head>
<body>
<form name="contactForm" onsubmit="return validateForm()" action="../php_action/confirmation.php" method="post">
    <h2>New Job Form</h2>
    <div class="row">
        <label>Job Number</label>
        <input type="text" name="jobnum">
        <div class="error" id="jobnumErr"></div>
    </div>
    <div class="row">
        <label>Job Description</label>
        <input type="text" name="jobdes">
        <div class="error" id="jobdesErr"></div>
    </div>
    <div class="row">
        <label>Managing Director</label>
        <input type="text" name="md" maxlength="10">
        <div class="error" id="mdErr"></div>
	</div>
	<div class="row">
        <label>Median Base Salary</label>
        <input type="text" name="salary" maxlength="10">
        <div class="error" id="salaryErr"></div>
    </div>        
    <div class="row">
        <input type="submit" value="Submit">
    </div>
</form>
</body>
</html>