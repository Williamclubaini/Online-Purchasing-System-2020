<?php include ('UI - Top - Navigation.php');?>
<?php include ('UI - Marquee.php');?>
<?php include ('UI - Logo.php');?>
<?php include ('UI - Search - Engine.php');?>
<?php include ('UI - Down - Navigation.php')?>
<!------------------------------START MY CART--------------------------------------------------->

<?php
include ('Backend - Shopping - Cart- Process.php');

if(isset($_GET["action"])){

  if($_GET["action"] == "delete")
  {
    foreach ($_SESSION["cart"] as $keys => $values) 
    {
      if($values["id"] == $_GET["id"])
      {
        unset($_SESSION["cart"][$keys]);
        //echo '<script>alert("item removed")</script>';
        
      }
      
    }
  }
}






?>

    
      
        



<div class="container"><div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong><a href="UI - Account.php" class="text-warning tex-right" style="text-decoration: none;">Contnue Shopping</a></strong><span> </span>Click On Continue To Add More Products.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>

</div></div>

<div class="container-fluid">
    <br>
    <h5 class="text-left text-uppercase" style="font-size: 18px;"><i class="fas fa-cart-plus"></i>Shopping Cart</h5>
    <table class="table table-hover table-responsive-sm" style="cursor: pointer; border:solid 1px gray;">
      <form method="POST" action="UI - Payment - Process.php">
      <thead>
      <tr class="btn-success">
        <th>Image</th>
        <th>Product Name</th>
        <th>Product Price</th>
        <th>Quantity</th>
        <th>Total</th>
        <th>Remove</th>
      </tr>
      </thead>

      <tbody>
         <?php 
         


       if(!empty($_SESSION["cart"]))
       {


        $total=0;
        foreach ($_SESSION["cart"] as $keys => $values) {
        
  
       

       ?>
      <tr>

        <td> 
      <img class="img-responsive" src="<?php echo $values["image"];?>" style="height: 20px; border-radius: 60%;">
      </td>

      <td> 
      <?php echo $values["product_name"];?>
      </td>


      <td>
      MK<?php echo $values["product_price"];?>
      </td>


        <td>
      <?php echo $values["quantity"];?>
        </td>

         <td>MK<?php echo number_format($values["quantity"] * $values["product_price"],2);?></td>
         <td class="remove-product-btn"><button class="btn btn-danger" type="button" name="submit"><a href="UI - My - Cart.php?action=delete&id=<?php echo $values["id"];?>" style="text-decoration: none;  color: #fff;"><i class="fas fa-trash"></i>Remove</button></a></td>
          <!---<td class="remove-product-btn"><button class="btn btn-danger" type="button" name="submit"><i class="fas fa-trash"></i>Remove</button></td>-->

      </tr>
      <?php

      $total=$total + ($values["quantity"] * $values["product_price"]);
    }
    ?>
 
      <tr>
        <td></td>
        <td></td>
        <td>

          
        </td>
        <td class="text-right text-body"><b>Grand Total<b></td>
        <td>MK<?php echo $total_amount=number_format($total,2);?>
          <input type="hidden" name="total_amount" value="<?php echo number_format($total,2);?>"/>
        </td>
        <td></td>
      </tr>

        <tr>
          <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
          <td class="proceed-btn"><button class="btn btn-success" type="submit" name="submit" value="submit">Proceed</button></td>
      </tr>

    <?php
}


  ?>

      

     
      </tbody>
    </form>
    </table>
     <div class="container text-center text-light bg-success" style="font-weight: bold;"><?php $notification="Your Shopping Cart Is Empty";
          if(empty($_SESSION["cart"])){
          echo $notification;
        }?></div>
  </div>
  
 

  <br><br><br>
<?php include ('UI - Footer.php');?>