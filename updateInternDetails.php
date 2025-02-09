<?php
session_start();
include 'conf/db-config.php';

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];

    // Fetch intern details
    $sql = "SELECT * FROM interenalldetails WHERE id = $username";
    $result = mysqli_query($conn, $sql);
    $intern = mysqli_fetch_assoc($result);

    if (!$intern) {
        echo "<script>alert('Invalid Intern ID'); window.location.href='internDashboard.php';</script>";
        exit();
    }
} else {
    echo "<script>alert('No Intern ID Provided'); window.location.href='internDashboard.php';</script>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Intern Details</title>
    <link rel="stylesheet" href="./styles/form.css">
</head>
<body>

    <div class="container">
        <h2>Update Intern Details</h2>

        <form action="updateInternBackend.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="internId" value="<?php echo $intern['id']; ?>">

            <div class="form-group">
                <label>Full Name:</label>
                <input type="text" name="fullName" value="<?php echo $intern['fullname']; ?>" required>
            </div>

            <div class="form-group">
                <label>Name with Initials:</label>
                <input type="text" name="nameWithIni" value="<?php echo $intern['nameinitial']; ?>" required>
            </div>

            <div class="form-group">
                <label>Date of Birth:</label>
                <input type="date" name="dob" value="<?php echo $intern['dob']; ?>" required>
            </div>

            <div class="form-group">
                <label>NIC:</label>
                <input type="text" name="nic" value="<?php echo $intern['nicno']; ?>" required>
            </div>

            <div class="form-group">
                <label>Email:</label>
                <input type="email" name="email" value="<?php echo $intern['email']; ?>" required>
            </div>

            <div class="form-group">
                <label>Phone:</label>
                <input type="text" name="phone" value="<?php echo $intern['mobile']; ?>" required>
            </div>

            <div class="form-group">
                <label>Education Type:</label>
                <input type="text" name="education" value="<?php echo $intern['edutype']; ?>" required>
            </div>

            <div class="form-group">
                <label>University:</label>
                <input type="text" name="university" value="<?php echo $intern['university']; ?>" required>
            </div>

            <div class="form-group">
                <label>Field:</label>
                <input type="text" name="field" value="<?php echo $intern['field']; ?>" required>
            </div>

            <div class="form-group">
                <label>Job Category:</label>
                <input type="text" name="jobCategory" value="<?php echo $intern['jobcategory']; ?>" required>
            </div>

            <div class="form-group">
                <label>Role:</label>
                <input type="text" name="role" value="<?php echo $intern['jobrole']; ?>" required>
            </div>

            <div class="form-group">
                <label>Duration:</label>
                <input type="text" name="duration" value="<?php echo $intern['duration']; ?>" required>
            </div>

            <div class="form-group">
                <label>Skills:</label>
                <textarea name="skills" required><?php echo $intern['skills']; ?></textarea>
            </div>

            <div class="form-group">
                <label>Portfolio:</label>
                <input type="text" name="portfolio" value="<?php echo $intern['portfolio']; ?>">
            </div>

            <div class="form-group">
                <label>Upload New CV (Optional):</label>
                <input type="file" name="cvFile">
                <p>Current File: <?php echo $intern['docname']; ?></p>
            </div>

            <input type="submit" name="updateIntern" value="Update Details">
        </form>
    </div>

</body>
</html>
