<?php

// connection to db
include('connection.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $matNum = strtoupper(test_input($_POST["matNum"]));
  $stName = test_input($_POST["stName"]);
  $phone = test_input($_POST["phone"]);
  $amount = test_input($_POST["amount"]);
  
    // querry
    $matNum=$_SESSION['matNum'];
    $query = "SELECT acc FROM tbl_data WHERE matNum='$matNum'  ";
    $results = mysqli_query($conn, $query);

     if (mysqli_num_rows($results) >= 1) {
        while($row = mysqli_fetch_assoc($results)) {
            if ($row["acc"] >= $amount){
                $query = "INSERT INTO tbl_transaction (matNum, phone, transactionAmount) VALUES('$matNum','$phone','$amount')";
                mysqli_query($conn,$query) or die(mysqli_error($conn));

                $acc = $row["acc"];
                $newacc = $acc - $amount;

                $query = "UPDATE `tbl_data` SET `acc`= '$newacc' WHERE matNum='$matNum'  ";
                mysqli_query($conn,$query) or die(mysqli_error($conn));
                
                echo '<script type="text/javascript">';
                echo 'alert("Success!!!");';
                echo 'window.location = "dashboard.php";';
                echo '</script>';
                } else {
                    echo '<script type="text/javascript">';
                    echo 'alert("Insuficient Fund!");';
                    echo 'window.location = "paymentform.php";';
                    echo '</script>';
                        }
                    }
            }else{
                echo '<script type="text/javascript">';
                echo 'alert("Sorry, there was an error!");';
                echo 'window.location = "dashboard.php";';
                echo '</script>';
            }
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