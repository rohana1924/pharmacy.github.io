
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

<link rel="stylesheet" type="text/css" href="bproduct.css"/>
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
            <li><a class="dropdown-item" a href="mycartprofile.php">Cart</a></li>
            <li><a class="dropdown-item active" ria-current="page" a href="#">Product</a></li>
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
  <h2>Products</h2><hr>
  <div class="row bg-light">
    <div class="card" style="width: 18rem;">
    <form action="productprofile.php" method="post">
  <img src="detol.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Dettol</h5>
    <p class="card-text">Price:Rs.120</p>
    <button type="submite" class="btn btn-primary" name="add_cart">Add to cart </button>
    <input type="hidden" name="itamname" value="Dettol">
    <input type="hidden" name="price" value="120">

    </form>
  </div>
</div>

  <div class="card" style="width: 18rem;">
  <form action="productprofile.php" method="post">
  <img src="balm.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">Zendu-Balm</h5>
    <p class="card-text">Price:Rs.50</p>
    <button class="btn btn-primary" name="add_cart">Add to cart</button>
    <input type="hidden" name="itamname" value="Zendu-Balm">
    <input type="hidden" name="price" value="50">
    </form>
  </div>
</div>


<div class="card" style="width: 18rem;">
<form action="productprofile.php" method="post">

  <img src="idrop.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">I-Drop</h5>
    <p class="card-text">Price:Rs.80</p>
    <button class="btn btn-primary" name="add_cart">Add to cart</button>
    <input type="hidden" name="itamname" value="I-Drop">
    <input type="hidden" name="price" value="80">
    </form>
  </div>
</div>
<div class="card" style="width: 18rem;">
<form action="productprofile.php" method="post">
  <img src="all-out.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">All out</h5>
    <p class="card-text">Price:Rs.50</p>
    <button class="btn btn-primary" name="add_cart">Add to cart</button>
    <input type="hidden" name="itamname" value="All out">
    <input type="hidden" name="price" value="50">
    </form>
  </div>
</div>
<div class="card" style="width: 18rem;">
<form action="productprofile.php" method="post">
  <img src="crepe_bandage_6cm.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">crepe_bandage_6cm</h5>
    <p class="card-text">Price:Rs.200</p>
    <button class="btn btn-primary" name="add_cart">Add to cart</button>
    <input type="hidden" name="itamname" value="crepe_bandage_6cm">
    <input type="hidden" name="price" value="200">
    </form>
  </div>
</div>
<div class="card" style="width: 18rem;">
<form action="productprofile.php" method="post">
  <img src="bload-pressure.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">bload-pressure</h5>
    <p class="card-text">Price:Rs.120</p>
    <button class="btn btn-primary" name="add_cart">Add to cart</button>
    <input type="hidden" name="itamname" value="bload-pressure">
    <input type="hidden" name="price" value="120">
    </form>
  </div>
</div>
<div class="card" style="width: 18rem;">
<form action="productprofile.php" method="post">
  <img src="pulse oximeter.jpg" class="card-img-top">
  <div class="card-body">
    <h5 class="card-title">pulse oximeter</h5>
    <p class="card-text">Price:Rs.80</p>
    <button class="btn btn-primary" name="add_cart">Add to cart</button>
    <input type="hidden" name="itamname" value="pulse oximeter">
    <input type="hidden" name="price" value="80">
</form>
  </div>
</div>
<div class="card" style="width: 18rem;">
<form action="productprofile.php" method="post">
  <img src="HORLICKS.jpg" class="card-img-top" >
  <div class="card-body">
    <h5 class="card-title">HORLICKS</h5>
    <p class="card-text">Price:Rs.170</p>
    <button class="btn btn-primary" name="add_cart">Add to cart</button>
    <input type="hidden" name="itamname" value="horlicks">
    <input type="hidden" name="price" value="170">
</form>
  </div>
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


<?php



           
            if($_SERVER['REQUEST_METHOD']=="POST"){
           if(isset($_POST['add_cart']))
           {
           
            if(isset($_SESSION['cart']))
            {
              $myitems=array_column($_SESSION['cart'],'itamname');
              if(in_array($_POST['itamname'],$myitems))
              {
                echo"<script> alert('item alredy added')
                </script>";
              }
              else
              {
              $count=count($_SESSION['cart']);
              $_SESSION['cart'][$count]=array('itamname'=>$_POST['itamname'],'price'=>$_POST['price'],'quantity'=>1);
              
              echo"<script> alert(' iteam  added')
                </script>";
              }
            }
            else{
              $_SESSION['cart'][0]=array('itamname'=>$_POST['itamname'],'price'=>$_POST['price'],'quantity'=>1);
              
            }

          }
          if(isset($_POST['remove']))
    { 
        foreach($_SESSION['cart'] as $key => $value)
      {
        if($value['itamname']==$_POST['itamname'])
        {
        unset($_SESSION['cart'][$key]);
        $_SESSION['cart']=array_values($_SESSION['cart']);
        echo"<script> alert('item remove');
        window.location.href='mycartprofile.php';
        </script>";
      }
    }
   }
        }
           
            ?>