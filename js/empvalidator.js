// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var empid = document.contactForm.empid.value;
    var empname = document.contactForm.empname.value;
    var empdept = document.contactForm.empdept.value;
    var emprole = document.contactForm.emprole.value;
	// Defining error variables with a default value
    var empidErr = empnameErr = deptErr = roleErr = true;
    // Validate name
    if(empid == "") {
        printError("empidErr", "Please enter employee ID");
    } else {
            printError("empidErr", "");
            empidErr = false;
    }
    // Validate email address
    if(empname == "") {
        printError("empnameErr", "Please enter employee name");
    } else {
            printError("empnameErr", "");
            empnameErr = false;
    }
    // Validate mobile number
    if(empdept == "") {
        printError("empdeptErr", "Please enter employee depertment");
    } else {
            printError("empdeptErr", "");
            empdeptErr = false;
    }
    if(emprole == "") {
        printError("emproleErr", "Please enter employee role");
    } else {
            printError("emproleErr", "");
            emproleErr = false;
    }

    
    // Prevent the form from being submitted if there are any errors
    if((empidErr || empnameErr || empdeptErr || emproleErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Employee ID: " + empid + "\n" +
                          "Employee Name: " + empname + "\n" +
                          "Employee Depertment: " + empdept + "\n" +
                          "Employee Role: " + emprole + "\n";
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};