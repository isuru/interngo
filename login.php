<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="styles/login.css">
</head>
<body class="loginbody">
    
    <?php include('./nav.php'); ?>
    
    <div class="containerlo" style="margin-top:50px">

        <div class="card" onclick="location.href='./loginIntern.php'">
            <label class="cardlbl">Login as Intern</label>

            <a href="./internLoginReg.php" alt="Intern Registration" class="signplink">First Time here ? Create an Account</a>
        </div>

        <div class="card" onclick="location.href='./loginCompany.php'">
            <label class="cardlbl">Login as Company</label>

            <a href="./companyLoginReg.php" alt="Company Registration" class="signplink">New here ? Sign up now !</a>
        </div>

    </div>
        
    </body>
</html>