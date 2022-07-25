<?php
include ('Backend - Shopping - Cart- Process.php');
?>
<?php include ('UI - Top - Navigation.php');?>
<?php include ('UI - Marquee.php');?>
<?php include ('UI - Logo.php');?>
<?php include ('UI - Search - Engine.php');?>
<?php include ('UI - Down - Navigation.php')?>


<!------------------------------START PRODUCT SECTION---------------------------------------------->
<div class="container"><div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong><a href="UI - My - Cart.php" class="text-warning tex-right" style="text-decoration: none;">View Your Shopping Cart</a> <span class="badge badge-warning" style="border-radius: 8px;"><?php
echo count($_SESSION['cart']);
?></span></strong><span> </span>Visit Your Shopping Cart To Check Products You Have Added In.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div></div>
<div class="container-fluid" style="height: auto; background-color: #fff; padding: 20px;">
<h1 class="text-center">Results found</h1>
<hr>               <!-----BIT PROJECT---BY WILLIAM C. LUBAINI--->



<!----------------------------------------------------------------------------------------------------->
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!----------------------------------------------------------------------------------------------------->
                          <!-----BIT PROJECT---BY WILLIAM C. LUBAINI--->
<!-----------START PRODUCT GRID SECTION----><div class="row justify-content-around">
<?php
if(isset($_POST['search'])){
$find=$_POST['find'];
              $query="SELECT * FROM products_table WHERE product_name LIKE '{$find}%'";
              $result=mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                  ?>
<!--START PRODUCT GRID--><div class="card product-section-cover" style="width: 18rem; margin-top: 10px; padding:10px; border-radius: 6px;">
	
<form method="POST" action="UI - Search - Results.php?id=<?php echo $row["id"];?>">
	
<!--DISPLAY-------------------------------------------------------------------->
	<img class="card-img-top" src="<?php echo $row['image'];?>" alt="Card image cap" style="height: 200px;">
   <input type="hidden" name="image" value="<?php echo $row["image"];?>"/>
	
<div class="card-body alert-info">
    <div class="product text-center text-capitalize"><?php echo $row["product_name"];?></div>
    <input type="hidden" name="product_name" value="<?php echo $row["product_name"];?>"/>
    <div class="price text-center text-capitalize">MK<?php echo $row["product_price"];?></div>
    <input type="hidden" name="product_price" value="<?php echo $row["product_price"];?>"/>
    <div class="amount"><span class="text-capitalize">quantity:</span><input type="text" name="quantity"  value="1" size="2" class="text-center" style="background-color: #fff;"></div>
    <div class="add-to-cart-btn"><button type="submit" name="submit">Add To Cart</button></div>
  </div>
<!-----------------------------type = "submit" & name="submit"--------------------------------->

</form>



</div><!----------------------------------END PRODUCT GRID------------------------------------->
<?php 
}
}
else{
  $search_result="No Results Found!";
  ?>
  <?php echo $search_result;?>
<?php

}
}
?>
</div><!--------------------END PRODUCT GRID SECTION------------------------------------------------->

















</div>

<?php include ('UI - Footer.php');?>