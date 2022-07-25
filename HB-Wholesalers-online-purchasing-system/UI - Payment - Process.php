<?php
include ('Backend - Database - Connection.php');


if (isset($_POST['pay'])) {




    @$name=$_POST['name'];
    @$email=$_POST['email'];
    @$location=$_POST['location'];
    @$total_amount=$_POST['total_amount'];
    @$transaction_date=$_POST['transaction_date'];
    @$payment_type=$_POST['payment_type'];
    @$cost_and_location=$_POST['cost_and_location'];
    @$contact=$_POST['contact'];

 $sql = "INSERT INTO payments
VALUES ('NULL','$name', '$email','$location','$total_amount', '$transaction_date', '$payment_type', '$cost_and_location','$contact')";

if ($conn->query($sql) === TRUE) {
 
 echo "<script>alert('You Have Sucessfully Paid')</script>";
 echo "<script>window.location='UI - My - Cart.php?session=unset'</script>";


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

<!-----------------------------PAYMENT PROCESS FORM------------------------------------------------>


<?php
include ('Backend - Database - Connection.php');
      

      if(isset($_POST['ordersbtn'])){

 $total_amount=$_POST['total_amount'];
}


if(isset($_POST['pay'])){
$sql = "DELETE FROM `orders` WHERE `orders`. `email` ='".$_SESSION['User']."'";

if ($conn->query($sql) === TRUE) {
    //echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

 

}



      

if(isset($_POST['submit'])){
 $total_amount=$_POST['total_amount'];
}




?>



<div class="container-fluid Payment">
      <form action="UI - Payment - Process.php" method="POST">
      
    
<!---START FIRST FORM SECTION-------------------------------------------------------------------->
          <div class="container">
            <div class="row">
              <div class="col-sm-6">

            <div class="col-50 customer-information-form-section">
            <h2 class="text-center">Customer Information</h2>
            <hr style="background-color: mediumseagreen;">
             <label for="cname" style=" margin-bottom: -15px;
  display: block;"><i class="fa fa-user">Customer Name</i></label>
            <input type="text" id="name" name="name" value="<?php
$sql = "SELECT name FROM users WHERE email='".$_SESSION['User']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ".$row["name"]." ";
    }
} 
?>" placeholder="Customer Name" readonly>


           <label for="email" style=" margin-bottom: -15px;
  display: block;"><i class="fa fa-envelope">Email</i></label> 
            <input type="email" id="email" name="email" value="<?php echo $_SESSION['User'];?>" placeholder="Email" readonly>

            <label for="location" style=" margin-bottom: -15px;
  display: block;"><i class="fa fa-map-marker icon text-body">Location</i></label>

            <input type="text" id="location" name="location" value="<?php
$sql = "SELECT location FROM users WHERE email='".$_SESSION['User']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ".$row["location"]." ";
    }
} 
?>" placeholder="Location" readonly>

<input type="hidden" name="transaction_date" value="<?php
echo date("Y-m-d");
?>">
          <label for="MK" style=" margin-bottom: -15px;
  display: block;"><span style="font-weight: bold;">MK</span></label>
            <input type="text" id="total_amount" name="total_amount" value="<?php echo $_POST["total_amount"];?>" placeholder="Total Amount" readonly> <small id="emailHelp" class="form-text text-muted text-center">Grand Total of Products You Have Purchased.</small>

         
          </div>
       </div>
<!---END FIRST FORM SECTION------------------------------------------------------------------->
<div class="col-sm-6 payment-section">
          <!---starts--><div class="col-50">
            <h3 class="text-center">Payment Method</h3>
            <hr style="background-color: mediumseagreen;">
            <label for="fname" style="font-weight: bold;">Accepted Cards</label>
            <div class="icon-container">
              <i class="fab fa-cc-visa" style="color:navy;"></i>
              <i class="fab fa-cc-amex" style="color:blue;"></i>
              <i class="fab fa-cc-mastercard" style="color:red;"></i>
              <i class="fab fa-cc-discover" style="color:orange;"></i>
            </div>


            <label for="cname" style="font-weight: bold;">Payment Method</label>
              <div class="col-75">
        <select id="payment_type" name="payment_type" class="select-class" style="width: 100%; padding: 6px; border:solid 1px mediumseagreen;">
          <option value="Airtel Money">Airtel Money</option>
          <option value="TNM Mpamba">TNM Mpamba</option>
          <option value="Credit Card">Credit Card</option>
          <option value="Internet Banking">Internet Banking</option>
        </select>
      </div>

            <label for="ccnum" style="font-weight: bold;"><i class="fa fa-bus icon"></i>Delivery Charges</label>
             <div class="col-75">
        <select id="cost_and_location" name="cost_and_location" class="select-class" style="width: 100%; padding: 6px; border:solid 1px mediumseagreen;">
          <option value="Mnchesi & Biwi - K1000">Mnchesi & Biwi - K1000</option>
          <option value="Kawale 1 & 2 - K1000">Kawale 1 & 2 - K1000</option>
          <option value="Chilinde - K1000">Chilinde - K1000</option>
          <option value="Area 22, 23 & 24 - K1500">Area 22, 23 & 24 - K1500</option>
          <option value="Area 3 - K1500">Area 3 - K1500</option>
          <option value="Area 6, 15 & 47 - K1800">Area 6, 15 & 47 - K1800</option>
          <option value="Area 18, 25, & 49 - K2000">Area 18, 25, & 49 - K2000</option>
          <option value="I Will Collect My Products">I Will Collect My Products</option>
        </select>
        <small id="emailHelp" class="form-text text-muted">Delivery cost depends on where you are located from where our Company is located. You could ignore delivery cost by selecting last option.</small>
      </div>

            <label for="contact" style="font-weight: bold;"><i class="fa fa-address-book icon"></i>Contact</label>
            <input type="text" id="contact" name="contact" value="<?php
$sql = "SELECT contact FROM users WHERE email='".$_SESSION['User']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ".$row["contact"]." ";
    }
} 
?>" readonly>
          </div><!---ends-->
</div>
        </div>
          </div>
          <div class="container" style="margin-top: 15px;">
        <input type="submit" name="pay"value="Submit" class="btni">
      </div></form>
 



 


</div>


<!--------------END PAYMENT PROCESS FORM---------------------------------------------------------->

<?php include ('UI - Footer.php');?>