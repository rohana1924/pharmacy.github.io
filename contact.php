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

<link rel="stylesheet" type="text/css" href="boostrapcontact.css"/>
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
          <a class="nav-link"  href="boostrap.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="boostrapabout.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active"aria-current="page" href="#">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="login.php">My Account</a></li>
            <li><a class="dropdown-item" href="mycart.php">Cart</a></li>
            <li><a class="dropdown-item" href="product.php">Product</a></li>
          </ul>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="login.php">login</a><li><a class="nav-link" href="booregister.php">Register</a></li>
        </li>
      </ul>
    </div>
  </div>
</nav>


  
<section id="about" class="about-section-padding">
<div class="container">
<div class="row">
	<h2>Contact Us</h2>
    <form action="contact.php" method="post">
<div class="mb-3 row">
    <label for="full name" class="col-sm-2 col-form-label">Full Name</label>
     <div class="col-sm-10">
      <input type="text" class="form-control" id="text" name="full_name">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="exampleInputEmail1" class="col-sm-2 col-form-label">Email address</label>
    <div class="col-sm-10">
   <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    </div>
  </div>
  <div class="d-grid gap-2 col-6 mx-auto">
  <button type="submit" class="btn btn-warning"  name="send">Send Now</button>
</form>
</div>
</div>
</div>
</section>
<section class="contact bg-light">
<div class="container">
  <div class="contact">
    <div><strong><h1>Visit Us</h1>
Latur Maharasthra India<br>
Mp.Nanand Tq.Nilanga<br>

Phone: +91 9172281079<br>

Email: rohantakekar19@gmail.com<br></strong></div>
  </section>
  <div class="bottom">
  <div class="container">
     <div class="row">
    <div class="col-8">Copyright ?? All rights reserved.</div>
    <div class="col-4">Website Designed by</div>
  </div>
     
	


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>

<?php
            $servername="localhost";
            $username="root";
            $password="";
            $dbname="boostrap";

            $conn=new mysqli($servername,$username,$password,$dbname);
            if($conn->connect_error)
            {
                die("connection fail");
            }
            if(isset($_POST['send']))
           {

            $full_name=$_POST['full_name'];
            $email=$_POST['email']; 

            $sql="INSERT INTO `contact` (`full_name`, `email`) VALUES ('$full_name', '$email');";

            if($conn->query($sql)==True)
            {
                echo "<script>alert('record is added')</script>"; 
               
            }
            else
            {
              echo "error";
            }
           }
            $conn->close();
            ?>