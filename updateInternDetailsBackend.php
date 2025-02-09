<?php
include 'conf/db-config.php';

if (isset($_POST['updateIntern'])) {
    $internId = $_POST['internId'];
    $fullName = $_POST['fullName'];
    $nameWithIni = $_POST['nameWithIni'];
    $dob = $_POST['dob'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $education = $_POST['education'];
    $university = $_POST['university'];
    $field = $_POST['field'];
    $jobCategory = $_POST['jobCategory'];
    $role = $_POST['role'];
    $duration = $_POST['duration'];
    $skills = $_POST['skills'];
    $portfolio = $_POST['portfolio'];

    $updateQuery = "UPDATE interenalldetails SET 
                    fullname='$fullName', 
                    nameinitial='$nameWithIni', 
                    dob='$dob', 
                    nicno='$nic', 
                    email='$email', 
                    mobile='$phone', 
                    edutype='$education', 
                    university='$university', 
                    field='$field', 
                    jobcategory='$jobCategory', 
                    jobrole='$role', 
                    duration='$duration', 
                    skills='$skills', 
                    portfolio='$portfolio'
                    WHERE id='$internId'";

    if (mysqli_query($conn, $updateQuery)) {
        // Handle CV File Upload if a new file is selected
        if (!empty($_FILES["cvFile"]["name"])) {
            $targetDir = "uploads/";
            $fileName = basename($_FILES["cvFile"]["name"]);
            $targetFilePath = $targetDir . $fileName;
            $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

            $allowTypes = array('jpg', 'jpeg', 'png', 'gif', 'pdf');

            if (in_array($fileType, $allowTypes)) {
                if (move_uploaded_file($_FILES["cvFile"]["tmp_name"], $targetFilePath)) {
                    $updateFileQuery = "UPDATE interenalldetails SET docname='$fileName', docurl='$targetFilePath' WHERE id='$internId'";
                    mysqli_query($conn, $updateFileQuery);
                }
            }
        }

        echo "<script>alert('Intern Details Updated Successfully!'); window.location.href='internDashboard.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
