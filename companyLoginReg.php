<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles/registration.css">
    <script src="scripts/companyreg.js"></script>

</head>
<body>

    
    <div class="mainContainer">

        <form name="companyRegistration" onsubmit="return doValidate()" method="POST" action="" class="formContainer">
    
            <div class="headercl">
                <h1 class="headerh1">Welcome to Company Enrollment</h1>
            </div>

            <div class="imgContainer">
                <img src="images/logoRW.jpg" alt = "internGo_LOGO" class="imgcl">
            </div>


            <div class="formRow">
                <label for="companyName" class="labelcl">Company Name</label>
                <input type="text" class="inptcls" name="comName" required>
            </div>

            <div class="formRow">
                <label for="brno" class="labelcl">Company Business Registration No: </label>
                <input type="text" class="inptcl" name = "brno" required>
            </div>

            <div class="formRow">
                <label for="userName" class="labelcl">User Name</label>
                <input type="text" class="inptcl" name = "userName" required>
            </div>

            <div class="formRow">
                <label for="password" class="labelcl">Password</label>
                <input type="password" class="inptcl" name = "password" required>
            </div>

            <div class="formRow">
                <label for="confirmPassword" class="labelcl">Confirm Password</label>
                <input type="password" class="inptcl" name = "confirmPassword" required>
            </div>

    
            <input type="submit" value="Create Your Account" name="internAcc" class="btncl">
    
    
        </form>
    
    </div>
    

</body>
</html>