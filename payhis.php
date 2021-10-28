<?php
include('connection.php');
include('header.php');


$matNum=$_SESSION['matNum'];
$query = "SELECT * FROM `tbl_transaction` WHERE matNum = '$matNum'";
$results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) == 1) {
    while($row = mysqli_fetch_assoc($results)) {

?>

<div class="container">
<table class="table table-success">
    <thead>
      <tr>
        <th>Transaction ID</th>
        <th>Registration Number</th>
        <th>Phone Number</th>
        <th>Amount</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td><?php echo $row["transactionId"]; ?></td>
        <td><?php echo $row["matNum"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td><?php echo $row["transactionAmount"]; ?></td>
        <td>Successful</td>
      </tr>      
    </tbody>
  </table>

<?php 
 }
}else{
echo'<div class="container">
    <div class="alert alert-success">
    <strong>You have  not made payment</strong>
    </div>
    </div>';
}
?>
</div>