<?php

    session_start();

    if (isset($_SESSION['isCompanyLoggedIn']) && $_SESSION['isCompanyLoggedIn'] === true) {
        header("Location: CompanyDashboard.php");
        exit();
    }

    include 'conf/db-config.php';

        if(isset($_POST['companylog'])){

            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM companycredential WHERE status='1' and username='$username' ";

            $result = mysqli_query($conn , $sql);

            if(mysqli_num_rows($result)==1){

                $row = mysqli_fetch_assoc($result);

                if(password_verify($password, $row['password'])){

                    $_SESSION['isCompanyLoggedIn'] = true;
                    $_SESSION['companyId']= $row['id'];
                    $_SESSION['username'] = $username;
                    $_SESSION['comdisplayname'] = $row['compname'];

                    header("Location: CompanyDashboard.php");
                    exit();

                }
                else{
                    echo "<script>alert('Username or Password incorrect'); window.location.href='loginCompany.php';</script>";
                    exit();
                }

            }

        } else {

            echo "Page Not Found ...! ";
        }






?>