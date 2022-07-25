<?php

if(isset($_POST['order'])){
  $email=$_GET['email'];
  $image=$_POST['image'];
  $product_name=$_POST['product_name'];
  $product_price=$_POST['product_price'];
  $quantity=$_POST['quantity'];
  $order_date=$_POST['order_date'];
  $checkout_status=$_POST['checkout_status'];


   $sql = "INSERT INTO orders
VALUES ('NULL','$email', '$image', '$product_name', '$product_price','$quantity','$order_date','$checkout_status')";
include ('Backend - Database - Connection.php');
if ($conn->query($sql) === TRUE) {
 
 echo "<script>alert('You Are Expected To Pay Within 3 Days')</script>";
 echo "<script>window.location='UI - Orders.php'</script>";


 //$_SESSION['User']=$_POST['email'];
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}


?>
<?php include ('UI - Top - Navigation.php');?>
<?php include ('UI - Marquee.php');?>
<?php include ('UI - Logo.php');?>
<?php include ('UI - Search - Engine.php');?>
<?php include ('UI - Down - Navigation.php')?>


<!------------------------------START PRODUCT SECTION---------------------------------------------->
<div class="container"><div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Click Here To <a href="UI - Track - Orders.php" class="text-warning tex-right" style="text-decoration: none;">View Your Orders</a></strong><span> </span>.Ordered Items Are Expected To Be Paid Within 3 Days.
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
include ('Backend - Database - Connection.php');

              $query="SELECT * FROM products_table  LIMIT 24";
              $result=mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                  ?>
<!--START PRODUCT GRID--><div class="card product-section-cover" style="width: 18rem; margin-top: 10px; padding:10px; border-radius: 6px;">
<form method="POST" action="UI - Orders.php?email=<?php echo $_SESSION['User'];?>&username=<?php?>">
	<img class="card-img-top" src="<?php echo $row['image'];?>" alt="Card image cap" style="height: 200px;">
  <input type="hidden" name="image" value="<?php echo $row["image"];?>"/>
	
<div class="card-body alert-info">
    <div class="product text-center text-capitalize"><?php echo $row["product_name"];?></div>
    <input type="hidden" name="product_name" value="<?php echo $row["product_name"];?>"/>
    <div class="price text-center text-capitalize">MK<?php echo $row["product_price"];?></div>
    <input type="hidden" name="product_price" value="<?php echo $row["product_price"];?>"/>
    <div class="amount"><span class="text-capitalize">quantity:</span><input type="text" name="quantity"  value="1" size="2" class="text-center" style="background-color: #fff;">
      
    <input type="hidden" name="order_date" value="<?php echo date("Y-m-d");?>">
        <input type="hidden" name="checkout_status" value="Unpaid">

    </div>
    <div class="add-to-cart-btn"><button type="submit" name="order">Place An Order</button></div>
  </div>
<!-----------------------------type = "submit" & name="submit"--------------------------------->

</form>



</div><!----------------------------------END PRODUCT GRID------------------------------------->
<?php 
}
}
?>
</div>

















</div>

<?php include ('UI - Footer.php');?>