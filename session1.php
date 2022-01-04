<?php 

    session_start();

    $_SESSION['username'] = "Admin";

    header("location: session2.php");


?>