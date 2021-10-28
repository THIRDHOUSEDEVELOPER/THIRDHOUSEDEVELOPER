<?php
     if (!isset($_SESSION['matNum'])) {
        $_SESSION['msg'] = "you must loggin first";
        header('location: index.php');
    }
    
    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION['matNum']);
            header("location: index.php");
    }
?>