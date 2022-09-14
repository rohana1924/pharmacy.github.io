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
          <a class="nav-link"  href="boostrap.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link "  href="boostrapabout.html">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link active dropdown-toggle" aria-current="page" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Product
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item active" aria-current="page" href="">My Account </a></li>
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
  <h2>My Account </h2>
<div class="container bg-light">
  
<div class="row justify-content-around">
	<div class="col-5 ">
    
  <form action="login.php" method="post">
    
  <div class="mb-3">
    <h3> Login</h3>
    <label for="exampleInputEmail1" class="form-label">Email address/User Name</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password" >
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
 
  <button type="submit" class="btn btn-warning" name="login">login</button>
  don't have an account?<ul class="navbar-nav"> <li class="nav-item">
          <a class="nav-link" href="booregister.php" name="registernow">Register Now</a>
        </li>
      </ul>
</form> 
</div>




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
            
           if(isset($_POST['login'])){

           
            $email=$_POST['email'];
            $password=$_POST['password'];
             
            $sql="SELECT * FROM registration WHERE email='$email' AND password='$password'";
          /*  "INSERT INTO `login` (`email`, `password`) VALUES ('$email', '$password');";  */
          $result = mysqli_query($conn, $sql);
          if($result->num_rows > 0)
        //  if($conn->query($sql) > 0)
            {
                $rows = mysqli_fetch_assoc($result);
                $_SESSION['user_name'] = $email;
                header('location:profile.php');
            }
            else
            {
              echo "<script>alert('email or password is wrong')</script>";
            }
          }
         
            $conn->close();
            ?>






            