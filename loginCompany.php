<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intern Login</title>

    <link rel="stylesheet" href="./styles/loginpage.css">

</head>
<body>

    <div class="header"><a href="./index.php" alt="home" style="text-decoration: none;">Intern GO</a></div>

    <div class="container">

        <h2>Company Login</h2>

        <form action="loginCompanyBackend.php" method="POST">
            
            <div class="form-group">
                <label for="username">User Name:</label>
                <input type="text" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
            </div>

            <input type="submit" value="Login" class="btn" name='companylog'>

            <div class="links">
                <a href="#">Forgot Password?</a> | 
                <a href="companyLoginReg.php">Register</a>
            </div>

        </form>
    </div>
    
    </body>
</html> 

