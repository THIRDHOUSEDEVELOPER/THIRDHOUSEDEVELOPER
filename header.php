<?php
include ('mustlogin.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Adsu</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap4\css\bootstrap.min.css">
  <script src="bootstrap4\jsjquery.min.js"></script>
  <script src="bootstrap4\js\popper.min.js"></script>
  <script src="bootstrap4\js\bootstrap.min.js"></script>
</head>
<body>
<div class="container">

<nav class="navbar navbar-expand-sm bg-light align-right">
<img src="img/adsu-logo.png" style="width:3%" class="img-circle" alt="img">
<h1 class="">ADSU <span>-School Fees Payment System</span> |</h1>
  <ul class="navbar-nav nav">
    <li class="nav-item">
      <a class="nav-link" href="dashboard.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Change Password</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#"><?php  echo $_SESSION['matNum'];?></a>
    </li>
  </ul>
</nav>

<?php
$matNum=$_SESSION['matNum'];
$query = "SELECT * FROM tbl_login WHERE matNum='$matNum' ";
$results = mysqli_query($conn, $query);
if (mysqli_num_rows($results) == 1) {
    while($row = mysqli_fetch_assoc($results)) {
        if ($row["role"]=='admin'){
            $isadmin = 1;
    echo'  <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="registerst.php">Register Students</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="updatefees.php">Update Students Fees</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="viewpayments.php">View Payments</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="showstudents.php">Show Students</a>
            </li>
          </ul>';
        }else{
            $isadmin = 0;
      echo' <ul class="nav flex-column">';
      echo' <li class="nav-item">
            <a class="nav-link" href="payhis.php">View Payment History</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="checkbal.php">Check Balance</a>
            </ul>';
        }
    }
    $query = "SELECT * FROM tbl_transaction WHERE matNum='$matNum' ";
    $results = mysqli_query($conn, $query);
    if($isadmin == 0){
        if (mysqli_num_rows($results) == 1) {
        echo' <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link" href="printreceipt.php">Print Receipt</a>
            </li>
            </ul>';
        }else{
    echo'  <ul class="nav flex-column">
            <li class="nav-item">
            <a class="nav-link" href="paymentform.php">Pay Fees</a>
            </li>
            
            </ul>';
        }
    }

}
?>


</div>
</body>
