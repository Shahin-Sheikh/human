// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var fullname = document.contactForm.fullname.value;
    var email = document.contactForm.email.value;
    var mobile = document.contactForm.mobile.value;
    var position = document.contactForm.position.value;
    var gender = document.contactForm.gender.value;
    var bondho = document.contactForm.bondho.value;
    var days = document.contactForm.days.value;
    
	// Defining error variables with a default value
    var fullnameErr = emailErr = mobileErr = positionErr = genderErr = bondhoErr = daysErr = true;
    
    // Validate name
    if(fullname == "") {
        printError("fullnameErr", "Please enter your name");
    } else {
            printError("fullnameErr", "");
            fullnameErr = false;
        
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
    
    // Validate mobile number
    if(mobile == "") {
        printError("mobileErr", "Please enter your mobile number");
    } else {
        var regex = /^[1-10]\d{9}$/;
        if(regex.test(mobile) === false) {
            printError("mobileErr", "Please enter a valid 10 digit mobile number");
        } else{
            printError("mobileErr", "");
            mobileErr = false;
        }
    }
    
    // Validate country
    if(position == "Select") {
        printError("positionErr", "Please select your position");
    } else {
        printError("positionErr", "");
        positionErr = false;
    }
    
    // Validate gender
    if(gender == "") {
        printError("genderErr", "Please select your gender");
    } else {
        printError("genderErr", "");
        genderErr = false;
    }
     // Validate country
     if(bondho == "Select") {
        printError("leaveErr", "Please select your leave");
    } else {
        printError("leaveErr", "");
        bondhoErr = false;
    }
    // Validate country
     if(days == "Select") {
        printError("daysErr", "Please select your days");
    } else {
        printError("daysErr", "");
        daysErr = false;
    }
    // Prevent the form from being submitted if there are any errors
    if((fullnameErr || emailErr || mobileErr || positionErr || genderErr || bondhoErr || daysErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Full Name: " + fullname + "\n" +
                          "Email Address: " + email + "\n" +
                          "Mobile Number: " + mobile + "\n" +
                          "Position: " + position + "\n" +
                          "Gender: " + gender + "\n"+
                          "Which Leave: " + bondho + "\n" +
                          "How many days you want: " + days + "\n" ;
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};