<?php

// connection to db
include('connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $matNum = strtoupper(test_input($_POST["matNum"]));
  $stName = test_input($_POST["stName"]);
  $phone = test_input($_POST["phone"]);
  $level = test_input($_POST["level"]);
  $dept = test_input($_POST["dept"]);
  $acc = test_input($_POST["acc"]);

    $query = "INSERT INTO tbl_data (matNum, stName, phone, level, dept, acc ) VALUES('$matNum','$stName','$phone','$level','$dept','$acc')";
    mysqli_query($conn,$query) or die(mysqli_error($conn));
    
    echo '<script type="text/javascript">';
    echo 'alert("Success!!!");';
    echo 'window.location = "registerst.php";';
    echo '</script>';
    
}else{
    echo '<script type="text/javascript">';
    echo 'alert("Sorry, there was an error!");';
    echo 'window.location = "registerst.php";';
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