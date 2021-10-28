<?php
include('connection.php');
include('header.php');


$query = "SELECT * FROM `tbl_data` ";
$results = mysqli_query($conn, $query);
    if (mysqli_num_rows($results) >= 1) {
?>
        <div class="container">
        <table class="table">
            <thead>
              <tr>
                <th>Regisration Number</th>
                <th>Name</th>
                <th>DEPARTMENT</th>
                <th>LEVEL</th>
                <th>PHONE NUMBER</th>
              </tr>
            </thead>
            <tbody>
<?php
    while($row = mysqli_fetch_assoc($results)) {

?>


      <tr>
        <td><?php echo $row["matNum"]; ?></td>
        <td><?php echo $row["stName"]; ?></td>
        <td><?php echo $row["dept"]; ?></td>
        <td><?php echo $row["level"]; ?></td>
        <td><?php echo $row["phone"]; ?></td>
      </tr>      
   

<?php 
 }
}
?>
 </tbody>
  </table>
</div>