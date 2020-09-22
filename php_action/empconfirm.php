<?php
// Include config file
require_once "../includes/config.php";
// Define variables and initialize with empty values
$empname = $empid = $emprole= $empdept="";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	 
      $empid = trim($_POST["empid"]);
      $empname = trim($_POST["empname"]);
      $empdept = trim($_POST["empdept"]);
      $emprole = trim($_POST["emprole"]);


    

    
        // Prepare an insert statement
        $sql = "INSERT INTO `emp` (empid, empname, empdept, emprole) VALUES (?, ?, ?, ?)";
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "ssss", $param_id, $param_name, $param_role, $param_dept);
            $param_id = $empid;
            // Set parameters
            $param_name = $empname;

            $param_role = $emprole;
            $param_dept = $empdept;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to home page
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