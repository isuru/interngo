<?php
    session_start();
    session_destroy(); // Destroy the session
    header("Location: loginIntern.php"); // Redirect to login page
    exit();
?>