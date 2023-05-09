<?php
include('connection.php');
include('header.php');


$matNum=$_SESSION['matNum'];
 $query = "SELECT tbl_data.stName, tbl_data.matNum, tbl_data.level, tbl_transaction.transactionAmount FROM tbl_data INNER JOIN tbl_transaction ON tbl_data.matNum = tbl_transaction.matNum WHERE tbl_data.matNum = '$matNum' " ;

 $results = mysqli_query($conn, $query);

     if (mysqli_num_rows($results) >= 1) {
        while($row = mysqli_fetch_assoc($results)) {

?>

<div class="container">
  <div class="jumbotron">
    <div class="alert alert-info"><h1>STUDENT RECEIPT</h1></div>
    <h3>NAME: <?php echo $row["stName"]; ?></h3>
    <h2>Registration number: <?php echo $row["matNum"]; ?></h2>
    <h2>LEVEL: <?php echo $row["level"]; ?>L</h2>
    <div class="alert alert-success">
      <h2>Total Paid: <?php echo $row["transactionAmount"]; ?></h2>
    </div>
    <div class="row">
      <div class="col-md-6">
          <img src="img/receipt.JPEG" alt="Bursar Sign" style="max-width:100%; width:150px; margin-left: 180px; height:auto; border-radius:50%;">
          <h3>Bursery Sign:.....................</h3>
      </div>
    </div>
  </div>
</div>


<?php 
 }
}
?>
</div>