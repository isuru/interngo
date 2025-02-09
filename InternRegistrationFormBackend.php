<?php
include 'conf/db-config.php';

if(isset($_POST['savedetails'])){

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

    
    if(isset($_FILES["cvFile"]) && $_FILES["cvFile"]["error"] == 0) {
        $targetDir = "uploads/";
        $fileName = basename($_FILES["cvFile"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

        $allowTypes = array('jpg', 'jpeg', 'png', 'gif', 'pdf');

        if (in_array($fileType, $allowTypes)){

            if (move_uploaded_file($_FILES["cvFile"]["tmp_name"], $targetFilePath)){

                $sql = "INSERT INTO interenalldetails (fullname, nameinitial, dob, nicno, email, mobile, edutype, university, field, jobcategory, jobrole, duration ,skills, portfolio, docname, docurl, status, sysdate) 
                        VALUES ('$fullName', '$nameWithIni', '$dob', '$nic', '$email', '$phone', '$education', '$university', '$field', '$jobCategory', '$role', '$duration' , '$skills', '$portfolio', '$fileName', '$targetFilePath', '1', current_timestamp())";

                $result = mysqli_query($conn, $sql);

                if($result){
                    
                    echo "<script>alert('Data Added Successfully!'); window.location.href='internDashboard.php';</script>";


                } else {
                    echo "Error: " . mysqli_error($conn);
                }
            } else {
                echo "<script>alert('Failed to move the uploaded file.'); window.location.href='error.php';</script>";
            }
        } else {
            echo "<script>alert('File type is not allowed. Please upload JPG, PNG, or PDF.');</script>";
        }
    } else {
        echo "<script>alert('No file uploaded or file error. Please try again.');</script>";
    }
}
?>
