<?php


?>
<?php include ('UI - Top - Navigation.php');?>
<?php include ('UI - Marquee.php');?>
<?php include ('UI - Logo.php');?>
<?php include ('UI - Search - Engine.php');?>
<?php include ('UI - Down - Navigation.php')?>


<!------------------------------START PRODUCT SECTION---------------------------------------------->
<div class="container"><div class="alert alert-warning alert-dismissible fade show" role="alert">
<?php 
include ('Backend - Database - Connection.php');
$query = "SELECT * FROM orders WHERE email='".$_SESSION['User']."'";
$result=mysqli_query($conn, $query);
if ($result->num_rows > 0) {
$NOTE="You Are Expected To Pay Your Orders Within 3 Days.";
?>
 <strong><span class="text-warning" style="cursor: pointer;"><?php echo $NOTE;?></span></strong>
 Click Here To <a href="UI - Orders.php" class="text-warning tex-right" style="text-decoration: none;">Continue Placing Orders</a>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
<?php
}else {
    $NOTE_TWO="You Do Not Have Any Orders";
    ?>
    <span class="text-warning" style="cursor: pointer; font-weight: bold;"><?php echo $NOTE_TWO;?></span>
    Click Here To <a href="UI - Orders.php" class="text-warning tex-right" style="text-decoration: none;">Place An Orders</a>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
  <?php
}?>  
</div></div>
<div class="container-fluid" style="height: auto; background-color: #fff; padding: 20px;">
               

<!----------------------------------------------------------------------------------------------------->
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!-----------------------------THE START OF NEW BLOCK OF CODE------------------------------------------>
<!----------------------------------------------------------------------------------------------------->
                         
<div class="row justify-content-around">
<div class="container">
<div class="container">           
<table class="table table-hover table-responsive-sm">
<form method="POST" action="UI - Payment - Process.php">
<thead>
<tr>
<th>Image</th>
<th>Product Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Product By Quantity</th>
<th>Order Date</th>
<th>Status</th>
</tr>
</thead>
<tbody>
<?php
include ('Backend - Database - Connection.php');
$query="SELECT * FROM orders  WHERE email='".$_SESSION['User']."'";
$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result)){?>
<tr style="cursor: pointer;">
<td><img src="<?php echo $row["image"];?>" class="img-circle" style="height: 30px; border-radius: 60%;"></td>
<td><?php echo $row["product_name"];?></td>
<td>MK<?php echo $row["product_price"];?></td>
<td><?php echo $row["quantity"];?></td>
<td><?php echo number_format($row["product_price"] * $row["quantity"],2);?></td>
<td><?php echo $row["order_date"];?></td>
<td><?php echo $row["checkout_status"];?></td>
</tr>
<?php 
@$total=$total + ($row["product_price"] * $row["quantity"]);
}
?>
<tr>
<td></td>
<td></td>
<td></td>
<td><span style="font-weight: bold;">Grand Total</span></td>
<td>MK<?php echo $total_amount=number_format($total,2);?></td>
<td><input type="hidden" name="total_amount" value="<?php echo number_format($total,2);?>"/></td>
<td></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td><button type="submit" name="ordersbtn" class="btn btn-success">Checkout</button></td>
<td></td>
</tr>
<?php
}
?>
</tbody>
</form>
</table>
</div>
</div>
</div>
<?php include ('UI - Footer.php');?>