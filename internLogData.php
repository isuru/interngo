<?php

include 'conf/db-config.php';

if(isset($_POST['internAcc'])){

    $txtnamewithini = $_POST['txtnamewithini'];
    $nic = $_POST['nic'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO interncredential (nameInitial, nic, username, password, status, sysdate) VALUES ( '$txtnamewithini', '$nic' , '$userName' , '$hashedPassword', '1', 'current_timestamp()' ) ";

    $result= mysqli_query($conn , $sql);
    
    if($result == true){
        header("Location: accCreateSuccess.php");
        exit();
    }
    else{
        echo "Account not Created " .mysqli_error($conn);
    }

}



?>