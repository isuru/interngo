<?php

    $host = "localhist";
    $username = "root";
    $password = "";
    $database = "interngo";


    $conn = mysqli_connect($host, $username, $password, $database);
    if($conn === false){
        die("Connection failed: " . mysqli_connect_error());
    }


?>