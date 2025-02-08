<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intern Dashboard</title>

    <link rel="stylesheet" href="./styles/internDashboard.css">

    
</head>
<body clas="internDashboard">

    <div class="header"><a href="index.php" style="text-decoration: none; color: white;">InternGO </a> <button class="logout-button" onclick="logout()">Logout</button></div>

    <div class="dashboard-container">

        <div class="dashboard-title">Welcome to Intern Dashboard, Embark on Your Professional Journey</div>
        <hr>

        <div class="dashboard">
            <a href="InternRegistrationForm.php" class="internDash_a"><div class="card">Add Intern Details</div></a>
            <div class="card">View Interns Details</div>
            <div class="card">View Notifications from Company</div>
            <div class="card">Modify Intern Details</div>
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
