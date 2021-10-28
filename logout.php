<?php
if (session_start()){
session_destroy();
        unset($_SESSION['matNum']);
            header("location: index.php");
} else{
    header("location: index.php");
}
?>