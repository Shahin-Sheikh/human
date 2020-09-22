<?php
// Include config file
require_once "../includes/config.php";
 
// Define variables and initialize with empty values
$email = $password = $repeat_password = $full_name = $street_address = $city = $zip = $deserve = $recent_project = "";
$email_err = $password_err = $repeat_password_err = $full_name_err = $street_address_err = $city_err = $zip_err = $deserve_err = $recent_project_err = "";
 
// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    //$usertype= trim($_POST["usertype"]);
 
    // Validate username
    if(empty(trim($_POST["email"]))){
        $email_err = "Please enter a email.";
    } else{
		$email= trim($_POST["email"]);
    }
    
    // Validate password
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter a password.";     
    } elseif(strlen(trim($_POST["password"])) < 6){
        $password_err = "Password must have atleast 6 characters.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate confirm password
    if(empty(trim($_POST["repeat_password"]))){
        $repeat_password_err = "Please confirm password.";     
    } else{
        $repeat_password = trim($_POST["repeat_password"]);
        if(empty($password_err) && ($password != $repeat_password)){
            $repeat_password_err = "Password did not match.";
        }
    }

    // Validate fullname
    if(empty(trim($_POST["full_name"]))){
        $full_name_err = "Please enter a email.";     
    }else{
        $full_name= trim($_POST["full_name"]);
	}

	// Validate street address
	if(empty(trim($_POST["street"]))){
        $street_address_err = "Please enter a street.";     
    }else{
        $street_address= trim($_POST["street"]);
	}
	
	// Validate city
	if(empty(trim($_POST["city"]))){
        $city_err = "Please enter a city.";     
    }else{
        $city= trim($_POST["city"]);
	}
	
	// Validate zip
	if(empty(trim($_POST["zip"]))){
        $zip_err = "Please enter a zip.";     
    }else{
        $zip= trim($_POST["zip"]);
	}

	// Validate legally
	/*if(empty(trim($_POST["legal"]))){
        $legal_err = "Please enter a option.";     
    }else{
        $legal= trim($_POST["legal"]);
    }*/
	
	// Validate description
	/*if(empty(trim($_POST["which"]))){
        $which_err = "Please enter a opinion.";     
    }else{
        $which= trim($_POST["which"]);
    }*/
	// Validate position
	/*if(empty(trim($_POST["position"]))){
        $position_err = "Please select a option.";     
	}else{
		foreach($_POST['position[]'] as $selected)
					{
						echo "<li>$selected</li>";
					}
        $position= trim($_POST["position[]"]);
	}*/
	
	// Validate deserve
	if(empty(trim($_POST["deserve"]))){
        $deserve_err = "Please enter a opinion.";     
    }else{
        $deserve= trim($_POST["deserve"]);
	}
	// Validate deserve
	if(empty(trim($_POST["recent_project"]))){
		$recent_project_err = "Please enter a opinion.";     
	}else{
		$recent_project= trim($_POST["recent_project"]);
	}
	
    
    // Check input errors before inserting in database
    if(empty($email_err) && empty($password_err) && empty($repeat_password_err) && empty($full_name_err) && empty($street_address_err) && empty($city_err) && empty($zip_err) && empty($deserve_err) && empty($recent_project_err)){
        
        // Prepare an insert statement
        $sql = "INSERT INTO job (email, password , repeat_password, full_name, street_address, city, zip, deserve, recent_project) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssss",$param_email, $param_password, $param_repeat_password, $param_fullname, $param_street_address, $param_city, $param_zip, $param_deserve, $param_recent_project);

            // Set parameters
			$param_email = $email;
            
            // Set parameters
			$param_password= $password;
			$param_repeat_password= $repeat_password;
            //$param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
            $param_fullname =  $full_name;
            // Set parameters
			$param_street_address = $street_address;
			$param_city = $city;
			$param_zip = $zip;
			//$param_legal = $legal;
			//$param_visa = $visa;
			//$param_which = $which;
			//$param_position = $position;
			$param_deserve = $deserve;
			$param_recent_project = $recent_project;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: ../client_side/public.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }

            // Close statement
            mysqli_stmt_close($stmt);
        }
    }
    
    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<!-- saved from url=(0081)http://winhost6.ischool.uw.edu/gclass/files/activities/build_w3/forms_pretty.html -->
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Job Application</title>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/css" rel="stylesheet">
	</head>
		
<body data-gr-c-s-loaded="true">
<div class="container">
<h2>Job Application</h2>


<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

	<fieldset class="form-horizontal">
		<legend>Account</legend>
		<div class="form-group" <?php echo (!empty($email_err)) ? 'has-error' : ''; ?>>
			<label class="col-sm-3 control-label">Email</label>
			<div class="col-sm-9">
				<input type="text" name="email" class="form-control" value="<?php echo $email; ?>">
				<span class="help-block"><?php echo $email_err; ?></span>
			</div>
		</div>
		<div class="form-group <?php echo (!empty($password_err)) ? 'has-error' : ''; ?>">
			<label class="col-sm-3 control-label">Password</label>
			<div class="col-sm-9">
				<input input type="password" name="password" class="form-control" value="<?php echo $password; ?>">
				<span class="help-block"><?php echo $password_err; ?></span>
			</div>
		</div>
		<div class="form-group <?php echo (!empty($repeat_password_err)) ? 'has-error' : ''; ?>">
			<label class="col-sm-3 control-label">Repeat password</label>
			<div class="col-sm-9">
				<input input type="password" name="repeat_password" class="form-control" value="<?php echo $repeat_password; ?>">
				<span class="help-block"><?php echo $repeat_password_err; ?></span>
			</div>
		</div>
	</fieldset>


	<fieldset class="form-horizontal">
		<legend>Personal Information</legend>
		<div class="form-group <?php echo (!empty($full_name_err)) ? 'has-error' : ''; ?>">
			<label class="col-sm-3 control-label">Full name</label>
			<div class="col-sm-9">
				<input input type="text" name="full_name" class="form-control" value="<?php echo $full_name; ?>">
				<span class="help-block"><?php echo $full_name_err; ?></span>
			</div>
		</div>
		<div class="form-group <?php echo (!empty($street_address_err)) ? 'has-error' : ''; ?>">
			<label class="col-sm-3 control-label">Street address</label>
			<div class="col-sm-9">
				<input input type="text" name="street" class="form-control" value="<?php echo $street_address; ?>">
				<span class="help-block"><?php echo $street_address_err; ?></span>
			</div>
		</div>
		<div class="form-group <?php echo (!empty($city_err)) ? 'has-error' : ''; ?>">
			<label class="col-sm-3 control-label">City</label>
			<div class="col-sm-9">
				<input input type="text" name="city" class="form-control" value="<?php echo $city; ?>">
				<span class="help-block"><?php echo $city_err; ?></span>
			</div>
		</div>
		<div class="form-group <?php echo (!empty($zip_err)) ? 'has-error' : ''; ?>">
			<label class="col-sm-3 control-label">ZIP</label>
			<div class="col-sm-9">
				<input input type="text" name="zip" class="form-control" value="<?php echo $zip; ?>">
				<span class="help-block"><?php echo $zip_err; ?></span>
			</div>
		</div>
	</fieldset>
	<fieldset>
		<legend>Personal Statement</legend>
		<div class="form-group <?php echo (!empty($deserve_err)) ? 'has-error' : ''; ?>">
			<label class="control-label">Why do you deserve this job?</label>
				<input input type="text" name="deserve" class="form-control" value="<?php echo $deserve; ?>">
				<span class="help-block"><?php echo $deserve_err; ?></span>
		</div>

		<div class="form-group <?php echo (!empty($recent_project_err)) ? 'has-error' : ''; ?>">
			<label class="control-label">What was your recent project?</label>
				<input input type="text" name="recent_project" class="form-control" value="<?php echo $recent_project; ?>">
				<span class="help-block"><?php echo $recent_project_err; ?></span>
		</div>
		<div>
		<li><a href="../php_action/cv.php" target="_blank">Upload Cv</a></li>
		</div>
	</fieldset>

	<div class="form-group">
			<input class="btn btn-primary btn-lg" type="submit" name="submit" value="Submit form">
    </div>
</form>
</div><!-- close .container -->

</body>
</html>