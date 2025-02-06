<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intern Go | Login</title>

    <link rel="stylesheet" href="styles/registration.css">
    <script src="scripts/internreg.js"></script>

</head>
<body>

    
    <div class="mainContainer">

        <form name="internRegistration" onsubmit="return doValidate()" method="POST" action="" class="formContainer">
    
            <div class="headercl">
                <h1 class="headerh1">Welcome to Intern Enrollment</h1>
            </div>

            <div class="imgContainer">
                <img src="images/logoRW.jpg" alt = "internGo_LOGO" class="imgcl">
            </div>


            <div class="formRow">
                <label for="nameWithini" class="labelcl">Name with Initials</label>
                <input type="text" class="inptcls" name="txtnamewithini" >
            </div>

            <div class="formRow">
                <label for="nic" class="labelcl">National Identity Card No</label>
                <input type="text" class="inptcl" name = "nic" >
            </div>

            <div class="formRow">
                <label for="userName" class="labelcl">User Name</label>
                <input type="text" class="inptcl" name = "userName" >
            </div>

            <div class="formRow">
                <label for="password" class="labelcl">Password</label>
                <input type="password" class="inptcl" name = "password" >
            </div>

            <div class="formRow">
                <label for="confirmPassword" class="labelcl">Confirm Password</label>
                <input type="password" class="inptcl" name = "confirmPassword" >
            </div>

    
            <input type="submit" value="Create Your Account" name="internAcc" class="btncl">
    
    
        </form>
    
    </div>
    
    <?php include('footer.php');?>