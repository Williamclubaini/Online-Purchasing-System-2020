




<?php include ('UI - Top - Navigation.php');?>
<?php include ('UI - Marquee.php');?>
<?php include ('UI - Logo.php');?>
<?php include ('UI - Search - Engine.php');?>
<?php include ('UI - Down - Navigation.php')?>



<div class="container-fluid">
<div class="container bg-warning"><span class="text-warning">.</span></div> 

</div>





<div class="row justify-content-around">
<div class="container">
<div class="container">           
<table class="table table-hover table-responsive-sm">
<form method="POST" action="UI - Payment - Process.php">
<?php
if(isset($_GET['action'])){
if($_GET["action"] == "orders_history"){?>
<thead>
<tr>
<th>Image</th>
<th>Product Name</th>
<th>Price</th>
<th>Quantity</th>
<th>Price By Quantity</th>
<th>Order Date</th>
<th>Status</th>
</tr>
</thead>
<?php
}
}
?>
<!----------------------------------------Order History------------------------------------------------>
<!----------------------------------------Order History------------------------------------------------>
<tbody>
<?php
include ('Backend - Database - Connection.php');

if(isset($_GET['action'])){
  if($_GET["action"] == "orders_history"){

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
else{
	$orders_note="You Haven't Placed Any Orders";
	?>
<div class="container"><span class="text-center text-warning" style="font-weight: bold;"><?php echo $orders_note;?></span></div>
	<?php
}
}
}
?>
</tbody>
<!----------------------------------------Order History------------------------------------------------>
<!----------------------------------------Order History------------------------------------------------>





<!----------------------------------------Purchasing History------------------------------------------->
<!----------------------------------------Purchasing History------------------------------------------->
<?php
if(isset($_GET['action'])){
 if($_GET["action"] == "purchase_history"){
 ?>
<thead>
<tr>
<th>ID</th>
<th>Total Amount Of Products Purchased</th>
<th>Transaction Date</th>
<th>Payment Method</th>
<th>Locations &amp; Shipping Charges</th>
<th>Customer Location</th>
</tr>
</thead>
<?php
}
}
?>
<tbody>
<?php
include ('Backend - Database - Connection.php');

if(isset($_GET['action'])){
  if($_GET["action"] == "purchase_history"){
    
$query="SELECT * FROM payments  WHERE email='".$_SESSION['User']."'";
$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_array($result)){?>
<tr style="cursor: pointer;">
<td><?php echo $row["id"];?></td>
<td>MK<?php echo $row["total_amount"];?></td>
<td><?php echo $row["transaction_date"];?></td>
<td><?php echo $row["payment_type"];?></td>
<td><?php echo $row["cost_and_location"];?></td>
<td><?php echo $row["location"];?></td>
</tr>
<?php 

}
?>

<?php
}
else{
	$payments_note="You Haven't Carried Out Any Transaction Process";
	?>
<div class="container"><span class="text-center text-warning" style="font-weight: bold;"><?php echo $payments_note;?></span></div>
	<?php
}
}
}
?>
</tbody>
<!----------------------------------------Purchasing History------------------------------------------->
<!----------------------------------------Purchasing History------------------------------------------->
</form>
</table>
</div>
</div>
</div>
<?php include ('UI - Footer.php');?>