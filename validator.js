// Defining a function to display error message
function findError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function validateForm() {
    // Retrieving the values of form elements
    var firstname = document.regForm.firstName.value;
    var lastname = document.regForm.lastName.value;
    var email = document.regForm.email.value;
    var date = document.regForm.date.value;
    var dept = document.regForm.dept.value;
    var password = document.regForm.password.value;


    // Defining error variables with a default value
    var lastNameErr = firstNameErr= emailErr = dateErr= genderErr= deptErr=passErr= true;
    // var nameErr = emailErr = mobileErr = countryErr = genderErr= passErr = true;

    // Validate name
    if(firstname == "") {
        findError("firstNameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if(regex.test(firstname) === false) {
            findError("firstNameErr", "Letters only");
        } else {
            findError("firstNameErr", "");
            firstNameErr = false;
        }
    }
    if(lastname == "") {
        findError("lastNameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if(regex.test(lastname) === false) {
            findError("lastNameErr", "Letters only");
        } else {
            findError("lastNameErr", "");
            lastNameErr = false;
        }
    }

    // Validate email address
    if(email == "") {
        findError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(regex.test(email) === false) {
            findError("emailErr", "Please enter a valid email address");
        } else{
            findError("emailErr", "");
            emailErr = false;
        }
    }
    if(date == "") {
        findError("dateErr", "Please select a date with the icon");
    } else {

        findError("dateErr", "");
        dateErr = false;

    }

    var checks = document.getElementsByName("gender");
    var newvar=0;
    for (var i = 0; i < checks.length; i++){
        if(checks[i].checked==true){
            newvar++;

        }

    }
    if( newvar==1){
        findError("genderErr", "");
        genderErr=false;
    }else {
        findError("genderErr", "Select a gender");

    }




    // Validate country
    if(dept == "") {
        findError("deptErr", "Please select your department");
    } else {
        findError("deptErr", "");
        deptErr = false;
    }

    if(password == "") {
        findError("passErr", "Please Enter a password");
    } else {
        var regex = /^(?=.*[!@#$%^&*()\-_=+{};:,<.>])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{15,}$/;
        if(regex.test(password) === false && password.length<15) {
            findError("passErr", "passwords must have,at least an uppercase,a lowercase,a digit,a special character and longer than or equal 15 characters");
        } else{
            findError("passErr", "");
            passErr = false;
        }
    }

    // Prevent the form from being submitted if there are any errors
    if((firstNameErr || lastNameErr|| emailErr|| dateErr|| genderErr|| deptErr|| passErr) === true) {
        // if((nameErr || emailErr || mobileErr || countryErr || genderErr || passErr) === true) {
        return false;
    }
};
// Defining a function to display error message
function findError(elemId, hintMsg) {
    document.getElementById(elemId).innerHTML = hintMsg;
}

// Defining a function to validate form
function validateForm() {
    // Retrieving the values of form elements
    var firstname = document.regForm.firstName.value;
    var lastname = document.regForm.lastName.value;
    var email = document.regForm.email.value;
    var date = document.regForm.date.value;
    var dept = document.regForm.dept.value;
    var password = document.regForm.password.value;


    // Defining error variables with a default value
    var lastNameErr = firstNameErr= emailErr = dateErr= genderErr= deptErr=passErr= true;
    // var nameErr = emailErr = mobileErr = countryErr = genderErr= passErr = true;

    // Validate name
    if(firstname == "") {
        findError("firstNameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if(regex.test(firstname) === false) {
            findError("firstNameErr", "Letters only");
        } else {
            findError("firstNameErr", "");
            firstNameErr = false;
        }
    }
    if(lastname == "") {
        findError("lastNameErr", "Please enter your name");
    } else {
        var regex = /^[a-zA-Z\s]+$/;
        if(regex.test(lastname) === false) {
            findError("lastNameErr", "Letters only");
        } else {
            findError("lastNameErr", "");
            lastNameErr = false;
        }
    }

    // Validate email address
    if(email == "") {
        findError("emailErr", "Please enter your email address");
    } else {
        // Regular expression for basic email validation
        var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(regex.test(email) === false) {
            findError("emailErr", "Please enter a valid email address");
        } else{
            findError("emailErr", "");
            emailErr = false;
        }
    }
    if(date == "") {
        findError("dateErr", "Please select a date with the icon");
    } else {
        let today=new Date();
        let mydate=new Date(date);

        if(mydate > today){
            findError("dateErr", "You can't be born in the future na");
        }else {

            findError("dateErr", "");
            dateErr = false;
        }

    }

    var checks = document.getElementsByName("gender");
    var newvar=0;
    for (var i = 0; i < checks.length; i++){
        if(checks[i].checked==true){
            newvar++;

        }

    }
    if( newvar==1){
        findError("genderErr", "");
        genderErr=false;
    }else {
        findError("genderErr", "Select a gender");

    }




    // Validate country
    if(dept == "") {
        findError("deptErr", "Please select your department");
    } else {
        findError("deptErr", "");
        deptErr = false;
    }

    if(password == "") {
        findError("passErr", "Please Enter a password");
    } else {
        var regex = /^(?=.*[!@#$%^&*()\-_=+{};:,<.>])(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z]).{15,}$/;
        if(regex.test(password) === false && password.length<15) {
            findError("passErr", "passwords must have,at least an uppercase,a lowercase,a digit,a special character and longer than or equal 15 characters");
        } else{
            findError("passErr", "");
            passErr = false;
        }
    }

    // Prevent the form from being submitted if there are any errors
    if((firstNameErr || lastNameErr|| emailErr|| dateErr|| genderErr|| deptErr|| passErr) === true) {
        // if((nameErr || emailErr || mobileErr || countryErr || genderErr || passErr) === true) {
        return false;
    }
};
