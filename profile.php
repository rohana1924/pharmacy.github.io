<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="myaccount.css"/>
</head>
<body>

<nav class="navbar navbar-expand-lg bg-light">
  <div class="container">
    <a class="navbar-brand" href="#"><span class="text-warning">AT</span>pharma</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="nav justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link"  href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="about.php">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="boostrpcontact.html">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item active" aria-current="page" href="">My Account</a></li>
            <li><a class="dropdown-item" href="mycartprofile.php">Cart</a></li>
            <li><a class="dropdown-item" href="productprofile.php">Product</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=""><strong><?php echo $_SESSION['user_name']?></strong></a><a class="nav-link" href="login.php">log out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>


  
<section id="about" class="about-section-padding">
  <h2>My Account </h2>
<div class="container bg-light">
<h1>Hello <?php echo $_SESSION['user_name']?> </h1>


</div>
</div>

<div class="bottom">
	<div class="container">
     <div class="row">
    <div class="col-8">Copyright © All rights reserved.</div>
    <div class="col-4">Website Designed by</div>
  </div>
  </div>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>