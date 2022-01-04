<?php 

    session_start();

    if($_SESSION['username'] == "" ) {
        echo "Not found username"."<br>";
    }else {
        echo $_SESSION['username']."<br>";
    }
?>
<a href="session1.php">get user</a>
<a href="sessionD.php">logout</a>