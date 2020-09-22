<?php
// Include config file
require_once "../includes/config.php";
// Define variables and initialize with empty values
$fullname = $email = $mobile = $position = $gender = $bondho = $days ="";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	  $fullname = trim($_POST["fullname"]);
	  $email = trim($_POST["email"]);
	  $mobile = trim($_POST["mobile"]);
      $position = trim($_POST["position"]);
      $gender = trim($_POST["gender"]);
      $bondho = trim($_POST["bondho"]);
      $days = trim($_POST["days"]);


    

    
        // Prepare an insert statement
        $sql = "INSERT INTO chuti (fullname, email, mobile , position, gender, bondho, days) VALUES (?, ?, ?, ?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_fullname, $param_email, $param_mobile, $param_position, $param_gender, $param_bondho, $param_days);
            // Set parameters
            $param_fullname = $fullname;
            $param_email= $email;
            // Set parameters
            $param_mobile = $mobile;
            //$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_position = $position;
            // Set parameters
            $param_gender = $gender;
            $param_bondho = $bondho;
            $param_days = $days;

           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

				
                // Redirect to login page
                header("location: ../client_side/employee.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
            // Close statement
            mysqli_stmt_close($stmt);
        }
    // Close connection
    mysqli_close($link);
}
?>