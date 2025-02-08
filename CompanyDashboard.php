<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intern Dashboard</title>

    <link rel="stylesheet" href="./styles/companyDashboard.css">

    
</head>
<body clas="companyDashboard">

    <div class="header"><a href="index.php" style="text-decoration: none; color: white;">InternGO </a> <button class="logout-button" onclick="logout()">Logout</button></div>

    <div class="dashboard-container">

        <div class="dashboard-title">Welcome to Company Dashboard, "Build teams, create strong bonds.</div>
        <hr>

        <div class="dashboard">
            <a href="companyRegistrationForm.php" class="companynDash_a"><div class="card">Add Intern Details</div></a>
            <div class="card">
                View Interns Details <br><br>
                    <select class="select">
                        <option>Intern Name</option>
                        <option>Intern Role</option>
                        <option>Intern Type</option>
                    </select>
            </div>
        </div>

    </div>

    <div class="footer">
        <p><strong>InternGO</strong></p>
        <p>Contact Number: 011212345</p>
        <p>Email Address: info@interngo.com</p>
        <p>Address: Colombo, Sri Lanka</p>
        <p>&copy; 2025 InternGO. All rights reserved.</p>
    </div>


    <!-- This Script for Logout Session -->

    <script>
        function logout() {
            window.location.href = 'login.php';
        }
    </script>

</body>
</html>
