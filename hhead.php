<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Students</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <style>
        /* Modify the background color */
         
        .navbar-custom {
            background-color: #323232;
        }
        /* Modify brand and text color */
         
        .navbar-custom .navbar-brand,
        .navbar-custom .navbar-text {
            color: white;
        }

    </style>
</head>
<body>
<nav class="navbar navbar-default navbar-custom">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Student's Review System</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="active"><a href="index.php">Home</a></li>
      
      <?php if(!isset($_SESSION['user_details'])) {
        ?>

      <li><a href="sign-up.php">Leave a Comment</a></li>
      <li><a href="login.php">Login</a></li>
    <?php }else{ ?>
      <li><a href="home.php">My Account</a></li>
      <li><a href="logout.php">Log Out!</a></li>
      <?php } ?>
    </ul>
  </div>
</nav>