<?php

// connection to db
include('connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $level = test_input($_POST["level"]);
  $fees = test_input($_POST["fees"]);

    $query = "UPDATE `tbl_fees` SET `fees`= '$fees' WHERE classlevel='$level'  ";
    mysqli_query($conn,$query) or die(mysqli_error($conn));
    
    echo '<script type="text/javascript">';
    echo 'alert("Success!!!");';
    echo 'window.location = "updatefees.php";';
    echo '</script>';
    
}else{
    echo '<script type="text/javascript">';
    echo 'alert("Sorry, there was an error!");';
    echo 'window.location = "updatefees.php";';
    echo '</script>';
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $data = ucwords($data);
  return $data;
}

    // close connection
        mysqli_close($conn);
?>