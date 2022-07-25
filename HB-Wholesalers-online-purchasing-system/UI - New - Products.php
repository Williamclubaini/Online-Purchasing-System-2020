<?php
include ('Backend - Shopping - Cart- Process.php');
?>
<!-----------------------------------------ADVERTISEMENT SECTION--------------------------------->
<div class="container adverts-section">
<h2 class="text-left text-uppercase">New Products</h2>
<hr>  
<div class="owl-carousel owl-theme">
<?php
$query="SELECT * FROM new_products ORDER BY id ASC ";
$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result)){
?>
<div class="item" style="height: auto;">
<div class="item-cover" style="border:solid 1px mediumseagreen!important;">
<form method="POST" action="UI - Account.php?id=<?php echo $row["id"];?>">
<img src="<?php echo $row['image'];?>" class="img-fluid" alt="12" style="height: 200px;">
<input type="hidden" name="image" value="<?php echo $row["image"];?>"/>
<div class="p-name text-center text-body"><?php echo $row["product_name"];?></div>
<div class="p-cost text-center text-body">MK<?php echo $row["product_price"];?></div>
<input type="hidden" name="product_name" value="<?php echo $row["product_name"];?>"/>
<input type="hidden" name="product_price" value="<?php echo $row["product_price"];?>"/>
<div class="p-quantity-header text-center text-body">Quantiy:</div>
<input type="text" name="quantity" value="1" size="2" class="p-quantity text-center" style="height: 25px;"/>
<div class="add-to-cart-btn text-center"><button class="addbtn" name="submit" type="submit">Add To Cart</button></div>
</form>
</div>
</div>
<?php 
}
}
?>
</div>
</div>
<br>
<hr class="container">
<!------------------------END ADVERTISEMENT SECTION---------------------------------------------->
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>

<script type="text/javascript" src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
      0:{
        items:1
      },
      600:{
        items:3
      },
      1000:{
        items:5
      },

    }
  })
</script>



