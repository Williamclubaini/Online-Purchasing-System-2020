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
<h1 class="text-center">Products</h1>
<hr>               <!-----BIT PROJECT---BY WILLIAM C. LUBAINI--->



<!----------------------------------------------------------------------------------------------------->
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!----------------------------------------------------------------------------------------------------->
                          <!-----BIT PROJECT---BY WILLIAM C. LUBAINI--->
<!-----------START PRODUCT GRID SECTION----><div class="row justify-content-around">
<?php
if(isset($_GET['action'])){
	if($_GET["action"] == "1"){
              $query="SELECT * FROM products_table LIMIT 16";
              $result=mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                  ?>
<!--START PRODUCT GRID--><div class="card product-section-cover" style="width: 18rem; margin-top: 10px; padding:10px; border-radius: 6px;">
	
<form method="POST" action="UI - Products.php?id=<?php echo $row["id"];?>&action=1">
	
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
}
}
?>
</div><!--------------------END PRODUCT GRID SECTION------------------------------------------------->
<!------------------------------END PRODUCT SECTION--------------------------------------------------->
<!----------------------------------------------------------------------------------------------------->
<!-----------------------------THE END OF NEW BLOCK OF CODE-------------------------------------------->
<!-----------------------------THE END OF NEW BLOCK OF CODE-------------------------------------------->
<!----------------------------------------------------------------------------------------------------->






<!----------------------------------------------------------------------------------------------------->
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!----------------------------------------------------------------------------------------------------->
<!-----------START PRODUCT GRID SECTION----><div class="row justify-content-around">
<?php
if(isset($_GET['action'])){
	if($_GET["action"] == "2"){
              $query="SELECT * FROM products_table LIMIT 8 OFFSET 30 ";
              $result=mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                  ?>
<!--START PRODUCT GRID--><div class="card product-section-cover" style="width: 18rem; margin-top: 10px; padding:10px; border-radius: 6px;">
<form method="POST" action="UI - Products.php?id=<?php echo $row["id"];?>&action=2">
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
}
}
?>
</div>



<!----------------------------------------------------------------------------------------------------->
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!----------------------------------------------------------------------------------------------------->
                          <!-----BIT PROJECT---BY WILLIAM C. LUBAINI--->
<!-----------START PRODUCT GRID SECTION----><div class="row justify-content-around">
<?php
if(isset($_GET['action'])){
	if($_GET["action"] == "3"){
              $query="SELECT * FROM products_table LIMIT 8 OFFSET 48";
              $result=mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                  ?>
<!--START PRODUCT GRID--><div class="card product-section-cover" style="width: 18rem; margin-top: 10px; padding:10px; border-radius: 6px;">
<form method="POST" action="UI - Products.php?id=<?php echo $row["id"];?>&action=3">
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
}
}
?>
</div>




<!----------------------------------------------------------------------------------------------------->
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!-----BIT PROJECT---BY WILLIAM C. LUBAINI--->
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!----------------------------------------------------------------------------------------------------->
<!-----------START PRODUCT GRID SECTION----><div class="row justify-content-around">
<?php
if(isset($_GET['action'])){
	if($_GET["action"] == "4"){
              $query="SELECT * FROM products_table LIMIT 12 OFFSET 18";
              $result=mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                  ?>
<!--START PRODUCT GRID--><div class="card product-section-cover" style="width: 18rem; margin-top: 10px; padding:10px; border-radius: 6px;">
<form method="POST" action="UI - Products.php?id=<?php echo $row["id"];?>&action=4">
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
}
}
?>
</div>





<!----------------------------------------------------------------------------------------------------->
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!----------------------------------------------------------------------------------------------------->
<!-----------START PRODUCT GRID SECTION----><div class="row justify-content-around">
<?php
if(isset($_GET['action'])){
	if($_GET["action"] == "5"){
              $query="SELECT * FROM products_table LIMIT 4 OFFSET 62 ";
              $result=mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                  ?>
<!--START PRODUCT GRID--><div class="card product-section-cover" style="width: 18rem; margin-top: 10px; padding:10px; border-radius: 6px;">
<form method="POST" action="UI - Products.php?id=<?php echo $row["id"];?>&action=5">
	<img class="card-img-top text-danger" src="<?php echo $row['image'];?>" alt="Image unavalable" style="height: 200px; font-weight: bold;">
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
}
}
?>
</div>















<!----------------------------------------------------------------------------------------------------->
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!----------------------------------------------------------------------------------------------------->
<!-----------START PRODUCT GRID SECTION----><div class="row justify-content-around">
<?php
if(isset($_GET['action'])){
	if($_GET["action"] == "7"){
              $query="SELECT * FROM products_table LIMIT 8 OFFSET 66 ";
              $result=mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                  ?>
<!--START PRODUCT GRID--><div class="card product-section-cover" style="width: 18rem; margin-top: 10px; padding:10px; border-radius: 6px;">
<form method="POST" action="UI - Products.php?id=<?php echo $row["id"];?>&action=7">
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
}
}
?>
</div>








<!----------------------------------------------------------------------------------------------------->
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!----------------------------------------------------------------------------------------------------->
<!-----------START PRODUCT GRID SECTION----><div class="row justify-content-around">
<?php
if(isset($_GET['action'])){
	if($_GET["action"] == "8"){
              $query="SELECT * FROM products_table  LIMIT 8 OFFSET 40 ";
              $result=mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                  ?>
<!--START PRODUCT GRID--><div class="card product-section-cover" style="width: 18rem; margin-top: 10px; padding:10px; border-radius: 6px;">
<form method="POST" action="UI - Products.php?id=<?php echo $row["id"];?>&action=8">
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
}
}
?>
</div>

















</div>

<?php include ('UI - Footer.php');?>