<?php
session_start(); 

// Check if the user is logged in
if (!isset($_SESSION['isInternLoggedIn']) || $_SESSION['isInternLoggedIn'] !== true) {
    header("Location: loginIntern.php");
    exit();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intern Dashboard</title>
    <link rel="stylesheet" href="./styles/internDashboard.css">
</head>
<body>

    <div class="header">
        <a href="index.php" style="text-decoration: none; color: white;">InternGO </a> 
        <button class="logout-button" onclick="logout()">Logout</button>
    </div>

    <div class="dashboard-container">
        <div class="dashboard-title">
            Welcome to Intern Dashboard, <?php echo htmlspecialchars($_SESSION['displayname']); ?>!
        </div>
        <hr>

        <div class="dashboard">
            <a href="InternRegistrationForm.php" class="internDash_a"><div class="card">Add Intern Details</div></a>
            <a href="viewInterndetails.php" class="internDash_a"><div class="card">View My Account Details</div></a>
            <div class="card">View Notifications from Company</div>
            <div class="card">Modify My Account Details</div>
        </div>
    </div>

    <div class="footer">
        <p><strong>InternGO</strong></p>
        <p>Contact Number: 011212345</p>
        <p>Email Address: info@interngo.com</p>
        <p>Address: Colombo, Sri Lanka</p>
        <p>&copy; 2025 InternGO. All rights reserved.</p>
    </div>

    <script>
        function logout() {     
            window.location.href = 'logout.php';
        }
    </script>

</body>
</html>
