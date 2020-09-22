<?php
    // Include config file
    require_once('../includes/config.php');

    // Define variables and initialize with empty values
$dept_name = $dept_leader = $dept_num="";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
	 
    $dept_num = trim($_POST["dept_num"]);
    $dept_name = trim($_POST["dept_name"]);
    $dept_leader= trim($_POST["dept_leader"]);
 

        
        // Prepare an insert statement
        $sql = "INSERT INTO `dept` (dept_num, dept_name, dept_leader) VALUES (?, ?, ?)";
        
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sss", $param_num, $param_name, $param_leader);
            $param_num = $dept_num;
            // Set parameters
            $param_name = $dept_name;

            $param_leader = $dept_leader;
            
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