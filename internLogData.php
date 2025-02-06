<?php

include 'conf/dbconf.php';

if(isset($_POST['internAcc'])){

    $txtnamewithini = $_POST['txtnamewithini'];
    $nic = $_POST['nic'];
    $userName = $_POST['userName'];
    $password = $_POST['password'];

    $sql = "INSERT INTO `internlogindetails` ($txtnamewithini, $nic, $userName , `password`, `status`, `createdate`, `adminremarks`) VALUES (NULL, '', '', '', '', '', current_timestamp(), '')";


}



?>