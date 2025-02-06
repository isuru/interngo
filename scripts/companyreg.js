function doValidate(){

    let comName = document.forms['companyRegistration']['comName'].value;
    let brno = document.forms['companyRegistration']['brno'].value;
    let userName = document.forms['companyRegistration']['userName'].value;
    let password = document.forms['companyRegistration']['password'].value;
    let confirmPassword = document.forms['companyRegistration']['confirmPassword'].value;


    if(comName == ""){
        alert ("Company Name cannot be Empty");
        return false;
    }
    if(brno == ""){
        alert("Business Registration number cannot be Empty");
        return false;
    }
    if(userName == ""){
        alert("User Name Field Cannot be Empty");
        return false;
    }

    if(password == ""){
        alert ("Password field cannot be Empty");
        return false;
    }
    if(password.length < 6){
        alert("Password must be at least 6 characters");
        return false;
    }
    if(password != confirmPassword){
        alert("Password and Confirm Password fields do not match");
        return false;
    }

    return true;
    
}