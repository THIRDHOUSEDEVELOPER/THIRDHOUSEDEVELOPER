<?php
include('connection.php');
include('header.php');
?>

<div class="container">
<table class="table">
    <thead>
      <tr>
        <th>Transaction ID</th>
        <th>MATRICULATION NUMBER</th>
        <th>PHONE NUMBER</th>
        <th>FEES PAID</th>
        
      </tr>
    </thead>
    <tbody>

<?php
$query = "SELECT * FROM `tbl_transaction` ";
$results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) >= 1) {
    while($row = mysqli_fetch_assoc($results)) {

?>


      <tr>
        <td><?php echo $row["transactionId"]; ?></td>
        <td><?php echo $row["matNum"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
        <td><?php echo $row["transactionAmount"]; ?></td>
      </tr>      
    

<?php 
 }
}
?>
</tbody>
</table>
</div>