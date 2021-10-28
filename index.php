<?php
include('connection.php');
// include('header.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>login</title>
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
  
<div class="container mt-3"><div></div>
<img src="img/adsu-logo.png" class="img-responsive" alt="img">
<h1>Login</h1>
 <form method="POST" action="loginexec.php">
  <div class="input-group mb-3">
    <input type="text" name="matNum" class="form-control" placeholder="Registration Number">
  </div>

  <div class="input-group mb-3">
    <input type="password" name="pws" class="form-control" placeholder="Password">
  </div>
  <div class="input-group-append">
  <button class="btn btn-success" type="submit">Login</button>  



 </form>
</div>
</div>

</body>

<!-- Mirrored from www.w3schools.com/bootstrap4/tryit.asp?filename=trybs_form_input_group_btn&stacked=h by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 06:21:02 GMT -->
</html>
