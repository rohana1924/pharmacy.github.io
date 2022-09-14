<?php session_start();?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

<link rel="stylesheet" type="text/css" href="mycart.css"/>
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
          <a class="nav-link" href="about.php">About</a>
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
            <li><a class="dropdown-item active" aria-current="page" href="#">Cart</a></li>
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
<div class="container">
  <h2>Cart</h2><hr>
  <div class="row bg-light">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">sr.no</th>
      <th scope="col">Item Name</th>
      <th scope="col">Item price</th>
      <th scope="col">ouantity</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody>
    <?php 
    


    if(isset($_SESSION['cart']))
    {
foreach($_SESSION['cart'] as $key => $value)
{
    echo"
    <tr>
    <td>1</td>
    <td>$value[itamname]</td>
    <td>$value[price]</td>
    <td><input type='number' value=''max='10' min='1' ></td>
    <td>
    <form action='productprofile.php' method='post'><button class='btn btn-sm btn-outline-danger' name='remove'>Remove</button>
    <input type='hidden' name='itamname' value='$value[itamname]'>
    </form></td>
    </tr>";
}
 } ?>
    
    
  </tbody>
</table>
  <button type="submit" class="btn btn-warning"> <a class="dropdown-item" href="productprofile.php">Product</button></a>
</div>

</div>
</section>

  <div class="bottom">
  <div class="container">
     <div class="row">
    <div class="col-8">Copyright © All rights reserved.</div>
    <div class="col-4">Website Designed by</div>
  </div>
     
	


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>