<?php
include('connection.php');
include('header.php');




?>

<div class="container">
<div class="alert alert-success">

<?php
$matNum=$_SESSION['matNum'];
 $query = "SELECT acc FROM tbl_data WHERE matNum='$matNum'  ";
 $results = mysqli_query($conn, $query);

     if (mysqli_num_rows($results) == 1) {
        while($row = mysqli_fetch_assoc($results)) {
            echo'<strong>'. $row["acc"]; echo' Naira</strong>';
        }  
     }else {
        echo'<strong>0.00 Naira</strong>';
     }
?>
  
</div>
</div>