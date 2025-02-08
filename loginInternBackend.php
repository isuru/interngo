<?php

    session_start();

    include 'conf/db-config.php';

        if(isset($_POST['loginIntern'])){

            $username = $_POST['username'];
            $password = $_POST['password'];

            $sql = "SELECT * FROM interncredential WHERE status='1' and username='$username' ";

            $result = mysqli_query($conn , $sql);

            if(mysqli_num_rows($result)==1){

                $row = mysqli_fetch_assoc($result);

                if(password_verify($password, $row['password'])){

                    $_SESSION['username'] = $username;
                    $_SESSION['displayname'] = $row['nameInitial'];

                    header("Location: internDashboard.php");
                    exit();

                }
                else{
                    echo "<script>alert('Username or Password incorrect'); window.location.href='loginIntern.php';</script>";
                    exit();
                }

            }
       

        }
    






?>