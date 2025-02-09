<?php
session_start();
include 'conf/db-config.php';

// Check if the intern is logged in
if (!isset($_SESSION['isInternLoggedIn']) || $_SESSION['isInternLoggedIn'] !== true) {
    header("Location: loginIntern.php");
    exit();
}

// Get the logged-in intern's ID
$internID = $_SESSION['internID'];

// Fetch intern details from the database
$sql = "SELECT nameInitial, username, nic, status FROM interncredential WHERE id = ?";

$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "i", $internID);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

// Check if data exists
if ($row = mysqli_fetch_assoc($result)) {
    $name = htmlspecialchars($row['nameInitial']);
    $username = htmlspecialchars($row['username']);
    $nic = htmlspecialchars($row['nic']);
    $status = $row['status'] == 1 ? "Active" : "Inactive";

} else {
    echo "<p style='color: red; text-align: center;'>Intern details not found!</p>";
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Intern Profile</title>
    <link rel="stylesheet" href="./styles/internProfile.css">
</head>
<body>

    <div class="header">
        <a href="index.php" style="text-decoration: none; color: white;">InternGO</a> 
        <button class="logout-button" onclick="logout()">Logout</button>
    </div>

    <div class="profile-container">
        <h2>Intern Profile</h2>
        <div class="profile-card">
            <p><strong>Name:</strong> <?php echo $name; ?></p>
            <p><strong>Username:</strong> <?php echo $username; ?></p>
            <p><strong>NIC Number:</strong> <?php echo $nic; ?></p>
            <p><strong>Status:</strong> <?php echo $status; ?></p>
        </div>

        <a href="internDashboard.php" class="back-button">Back to Dashboard</a>
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
