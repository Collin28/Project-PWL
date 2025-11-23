<?php
    session_start();
    session_destroy();

    header("Location:../Loginpage/Loginpage.php");

    exit();
?>