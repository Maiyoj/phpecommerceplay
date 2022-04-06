<!-- Creating connection using mysql -->
<?php
$con = mysqli_connect('localhost', 'root');
mysqli_select_db($con,'ecom');
$sql =  "SELECT * FROM products WHERE featured =1";
$featured = $con->query($sql);
?>


<!-- Display Items -->
<div class="col-md-2"></div>
<div class="col-md-8">
<div class="row">
<h2 class="text-center"> Product Details</h2><br><br>

<!-- Getting products from database -->
<?php 
while($product = mysqli_fetch_assoc($featured)):
?>
<div class="card"  style="width: 18rem;  bg-secondary ">
<div class="col-md-5">
  <h4><?= $product['name'];?></h4>
  <img src="<?=$product['image'];?>" alt="<?= $product['name'];?>">
  <p class="price">Ksh <?=$product['price'];?></p>
  <p class="description">Ksh <?=$product['brandname'];?></p>
  <p class="brandname">Ksh <?=$product['brandname'];?></p>

</div>
<?php endwhile; ?>
</div>
</div>
</div>