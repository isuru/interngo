function doValidate(){

    let txtnamewithini = document.forms['internRegistration']['txtnamewithini'].value;
    let nic = document.forms['internRegistration']['nic'].value;
    let userName = document.forms['internRegistration']['userName'].value;
    let password = document.forms['internRegistration']['password'].value;
    let confirmPassword = document.forms['internRegistration']['confirmPassword'].value;


    if(txtnamewithini == ""){
        alert ("Name with initial field cannot be Empty");
        return false;
    }
    if(nic == ""){
        alert("National Identity Card number cannot Empty");
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
