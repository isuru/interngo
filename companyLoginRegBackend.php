<?php

include 'conf/db-config.php';

if(isset($_POST['internAcc'])){

    $comName = $_POST['comName'];
    $brno = $_POST['brno'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO companycredential ( compname, brno, username, password, status, sysdate) VALUES ('$comName', '$brno', '$userName', '$hashedPassword', '1', current_timestamp())";

    $result= mysqli_query($conn , $sql);
    
    if($result == true){
        header("Location: accCreateSuccess.php");
        exit();
    }
    else{
        echo "Account not Created " .mysqli_error($conn);
    }

}

