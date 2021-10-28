<?php
include('connection.php');
include('header.php');


?>

<div class="container">
  <h2>Add Students</h2>
  <form method="POST" action="registerstexec.php">
    <div class="form-group">
      <label for="pwd">Registration Number</label>
      <input type="text" class="form-control" id="matNum" placeholder="Registration Number" name="matNum" value="">
    </div>
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" id="stName" placeholder="Name" name="stName" value="">
    </div>
    <div class="form-group">
      <label for="email">Phone Number</label>
      <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" value="">
    </div>
    <div class="form-group">
      <label for="email">Level</label>
      <input type="text" class="form-control" id="" placeholder="level" name="level" value="">
    </div>
    <div class="form-group">
      <label for="email">department</label>
      <input type="text" class="form-control" id="" placeholder="department" name="dept" value="">
    </div>
    <div class="form-group">
      <label for="email">Wallet</label>
      <input type="text" class="form-control" id="" placeholder="Amount" name="acc" value="">
    </div>
    <button type="submit" class="btn btn-success">Add</button>
  </form>
</div>