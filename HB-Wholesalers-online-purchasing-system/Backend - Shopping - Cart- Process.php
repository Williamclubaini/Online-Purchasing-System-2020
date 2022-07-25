<?php
include ('Backend - Database - Connection.php');

$image="image";
$product_name="product_name";
$product_price="product_price";
$quantity="quantity";
@session_start();

if (isset($_POST["submit"])) {
if(isset($_SESSION['cart'])){
$item_array_id=array_column($_SESSION["cart"], "id");
if(!in_array($_GET["id"], $item_array_id))
{
$count=count($_SESSION['cart']);
  $item_array=array(
    'id' =>$_GET['id'],
    'image' =>$_POST['image'],
    'product_name' =>$_POST['product_name'],
    'product_price' =>$_POST['product_price'],
    'quantity' =>$_POST['quantity']
  );
   $_SESSION['cart'][$count]=$item_array;
}
else{
  echo '<script>alert("Item Is Already Added")</script>';
  echo '<script>window.location="UI - Products.php?action=1"</script>';
}
}
else{
  $item_array=array(
    'id' =>$_GET['id'],
    'image' =>$_POST['image'],
    'product_name' =>$_POST['product_name'],
    'product_price' =>$_POST['product_price'],
    'quantity' =>$_POST['quantity']
  );
  //storing details above into $_SESSION['cart']
  $_SESSION['cart'][0]=$item_array;
}
//@array_push($_SESSION['cart']);  
}
?>