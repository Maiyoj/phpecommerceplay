<!-- Creating connection using mysql -->
<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'ecom');
$sql =  "SELECT * FROM products WHERE featured =2";
$featured = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Eccommerce</title>
</head>
<body>
    
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Eccentric.Com</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-2">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Products

          </a>
          <ul class="dropdown-menu ms-auto" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Pallazo</a></li>
            <li><a class="dropdown-item" href="#">Jeans</a></li>
  
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- Display Items -->
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="row">
<h2 class="text-center">Top Product</h2><br><br>

<!-- Getting products from database -->
<?php 
while($product = mysqli_fetch_assoc($featured)):
?>
<div class="card"  style="width: 18rem;  bg-secondary ">
<div class="col-md-5">
  <h4><?= $product['name'];?></h4>
  <img src="<?=$product['image'];?>" alt="<?= $product['name'];?>">
  <p class="price">Ksh <?=$product['price'];?></p>
  <a href="details.php">
  <button type="button" class="btn btn-success" data-toggle="modal" data-target="#details-1">More</button>
</a>
</div>
<?php endwhile; ?>
</div>
</div>
</div>
<!-- Script -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>