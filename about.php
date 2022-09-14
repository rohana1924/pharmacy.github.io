
<?php
session_start();
?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="boostrapabout.css"/>
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
          <a class="nav-link active" aria-current="page" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contactprofile.php">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="profile.php">My Account</a></li>
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
<div class="container bg-light">
<div class="row">
	
  <strong><h2>About Us</h2><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbspStaying true to our mission of providing wellness in every home in every community that we serve, Our Pharmacy is a full-line and full service pharmacy that offers a wide variety of pharmaceutical products, supplies, and equipments, and offering pharmaceutical services to patients in each community we serve.

We understand that sometimes quality can come pricey that is why here, in Our Pharmacy, we strive to give you safe, genuine, and high-quality products at the most reasonable price. We are also committed to providing quality and dependable service at the most affordable rate.

We know the need for a community pharmacy that answers the needs of our dear locals that is why Our Pharmacy is here to fill in that gap. And with the sincere service of our team of pharmacists, technologists, and staff, we will extend all effort to deliver what we have committed.<br><br>

<h2> Mission Statement</h2>

Here at Our Pharmacy, helping our patients maintain the best health without breaking their bank account is a top priority. Our compassionate staff understand that the needs of different patients vary, and therefore are delighted to listen to every patient and work closely with their physician offices to achieve the ultimate goal – sound patient care.

We offer fast service at a healthy speed to our patients, with the understanding that our patients are not just customers and deserve well informed opinions of our well trained pharmacists. As a traditional pharmacy, we understand that there are times that you cannot come to us, and we must come to you. If you have been searching for a pharmacy that lets you speak with the pharmacist(s), look no further. We are here for you.

Visit us today in our branch so you get to experience the quality of service that we are talking about. You may also call us at 832-299-6802 for your inquiries about product availability or if you need medications delivery.</strong>  
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