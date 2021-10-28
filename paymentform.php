<?php
include('connection.php');
include('header.php');


$matNum=$_SESSION['matNum'];
//  $query = "SELECT * FROM tbl_data WHERE matNum='$matNum'  ";
 $query = "SELECT * FROM tbl_data INNER JOIN tbl_fees ON tbl_data.level = tbl_fees.classlevel WHERE tbl_data.matNum = '$matNum' " ;
 $results = mysqli_query($conn, $query);

     if (mysqli_num_rows($results) == 1) {
        while($row = mysqli_fetch_assoc($results)) {
            //school fees per level
            $fees=$row["fees"];

?>

<div class="container">
  <h2>Payment Form</h2>
  <form method="POST" action="paymentexec.php">
    <div class="form-group">
      <label for="pwd">Registration Number</label>
      <input type="text" class="form-control" id="matNum" placeholder="Registration Number" name="matNum" value="<?php echo $row["matNum"]; ?>">
    </div>
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="stName" placeholder="Name" name="stName" value="<?php echo $row["stName"]; ?>">
    </div>
    <div class="form-group">
      <label for="email">Phone Number</label>
      <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" value="<?php echo $row["phone"]; ?>">
    </div>
    <div class="form-group">
      <label for="email">Amount to Pay</label>
      <input type="text" class="form-control" id="amount" placeholder="Amount to Pay" name="amount" value="<?php echo $fees; ?>">
      
<?php 
 }
}
?>
    </div>
    <button type="submit" class="btn btn-success">Pay</button>
  </form>
</div>