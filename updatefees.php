<?php
include('connection.php');
include('header.php');


?>

<div class="container">
  <h2>Payment Form</h2>
  <form method="POST" action="updatefeesexec.php">
    <div class="form-group">
      <label for="pwd">Update Fees</label>
      <input type="text" class="form-control" id="" placeholder="Level" name="level" value="">
    </div>
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="" placeholder="Fees" name="fees" value="">
    </div>
    <button type="submit" class="btn btn-success">Update</button>
  </form>
</div>