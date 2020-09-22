// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var id = document.contactForm.id.value;
    var password = document.contactForm.password.value;
    var usertype = document.contactForm.usertype.value;
    
	// Defining error variables with a default value
    var idErr = passwordErr = usertypeErr =  true;
    

     // Validate name
     if(id == "") {
        printError("idErr", "Please enter your id");
    } else {
            printError("idErr", "");
            idErr = false;
        
    }
    // Validate email address
    if(password == "") {
        printError("passwordErr", "Please enter your password");
    } else {
            printError("passwordErr", "");
            passwordErr = false;
        
    }
     // Validate name
     if(usertype == "") {
        printError("usertypeErr", "Please enter your usertype");
    } else {
            printError("usertypeErr", "");
            usertypeErr = false;
        
    }
    
    
    // Prevent the form from being submitted if there are any errors
    if((idErr || passwordErr || usertypeErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
            
                          "New password: " + password + "\n";
                         
                          
                          
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};