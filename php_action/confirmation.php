<?php
// Include config file
require_once "../includes/config.php";
// Define variables and initialize with empty values
$jobnum = $jobdes = $md = $salary ="";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	  $jobnum = trim($_POST["jobnum"]);
	  $jobdes = trim($_POST["jobdes"]);
	  $md = trim($_POST["md"]);
	  $salary = trim($_POST["salary"]);


    

    
        // Prepare an insert statement
        $sql = "INSERT INTO joblist (jobnum, jobdes, md , salary) VALUES (?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_jobnum, $param_jobdes, $param_md, $param_salary);
            // Set parameters
            $param_jobnum = $jobnum;
            $param_jobdes= $jobdes;
            // Set parameters
            $param_md = $md;
            //$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_salary = $salary;
            // Set parameters

           
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){

				
                // Redirect to login page
                header("location: ../client_side/Dashborad.php");
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