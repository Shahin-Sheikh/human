// Defining a function to display error message
function printError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}
// Defining a function to validate form 
function validateForm() {
    // Retrieving the values of form elements 
    var jobnum = document.contactForm.jobnum.value;
    var jobdes = document.contactForm.jobdes.value;
    var md = document.contactForm.md.value;
    var salary = document.contactForm.salary.value;
	// Defining error variables with a default value
    var jobnumErr = jobdesErr = mdErr = salaryErr = true;
    // Validate name
    if(jobnum == "") {
        printError("jobnumErr", "Please enter job number");
    } else {
            printError("jobnumErr", "");
            jobnumErr = false;
    }
    // Validate email address
    if(jobdes == "") {
        printError("jobdesErr", "Please enter job description");
    } else {
            printError("jobdesErr", "");
            jobdesErr = false;
    }
    // Validate mobile number
    if(md == "") {
        printError("mdErr", "Please enter managing director");
    } else {
            printError("mdErr", "");
            mdErr = false;
    }
    if(salary == "") {
        printError("salaryErr", "Please enter a salary");
    } else {
            printError("salaryErr", "");
            salaryErr = false;
    }

    
    // Prevent the form from being submitted if there are any errors
    if((jobnumErr || jobdesErr || mdErr || salaryErr) == true) {
       return false;
    } else {
        // Creating a string from input data for preview
        var dataPreview = "You've entered the following details: \n" +
                          "Job Number: " + jobnum + "\n" +
                          "Job Description: " + jobdes + "\n" +
                          "Managing Director: " + md + "\n" +
                          "Median Base Salary: " + salary + "\n";
        // Display input data in a dialog box before submitting the form
        alert(dataPreview);
    }
};