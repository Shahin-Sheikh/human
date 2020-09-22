// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var id = document.contactForm.id.value;
    var email = document.contactForm.email.value;
    var username = document.contactForm.username.value;
    
	// Defining error variables with a default value
    var idErr = emailErr = usernameErr =  true;
    

     // Validate name
     if(id == "") {
        printError("idErr", "Please enter your name");
    } else {
            printError("idErr", "");
            idErr = false;
        
    }
    // Validate email address
    if(email == "") {
        printError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\S+@\S+\.\S+$/;
        if(regex.test(email) === false) {
            printError("emailErr", "Please enter a valid email address");
        } else{
            printError("emailErr", "");
            emailErr = false;
        }
    }
     // Validate name
     if(username == "") {
        printError("usernameErr", "Please enter your name");
    } else {
            printError("usernameErr", "");
            usernameErr = false;
        
    }
    
    
    // Prevent the form from being submitted if there are any errors
    if((idErr || emailErr || usernameErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
            
                          "New Email Address: " + email + "\n" +
                          "New Username: " + username + "\n" ;
                          
                          
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};