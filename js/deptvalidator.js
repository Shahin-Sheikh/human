// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var dept_num = document.contactForm.dept_num.value;
    var dept_name = document.contactForm.dept_name.value;
    var dept_leader = document.contactForm.dept_leader.value;
	// Defining error variables with a default value
    var deptnumErr = deptnameErr = deptleaderErr = true;
    // Validate name
    if(dept_num == "") {
        printError("deptnumErr", "Please enter Depertment Number");
    } else {
            printError("deptnumErr", "");
            deptnumErr = false;
    }
    // Validate email address
    if(dept_name == "") {
        printError("deptnameErr", "Please enter Depertment Name");
    } else {
            printError("deptnameErr", "");
            deptnameErr = false;
    }
    // Validate mobile number
    if(dept_leader == "") {
        printError("deptleaderErr", "Please enter Depertment Leader");
    } else {
            printError("deptleaderErr", "");
            deptleaderErr = false;
    }

    
    // Prevent the form from being submitted if there are any errors
    if((deptnumErr || deptleaderErr || deptnameErr ) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Depertment Number: " + dept_num + "\n" +
                          "Depertment Name: " + dept_name + "\n" +
                          "Depertment Leader: " + dept_leader + "\n";
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};