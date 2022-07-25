
<?php include ('UI - Top - Navigation.php');?>

<!------echos email when its updated automatically-->
<?php
include ('Backend - Database - Connection.php');
 



if (isset($_POST['update'])) {



  $sql = "UPDATE users SET name='$_POST[name]',email='$_POST[email]',contact='$_POST[contact]',
  location='$_POST[location]'
   WHERE password=md5('$_POST[password]')";

if (mysqli_query($conn, $sql)) {
  $_SESSION['User']=$_POST['email'];

  header("location:UI - My - Account.php");

    
} else {
    echo "Error updating record: " . mysqli_error($conn);
}


}




?>
<!------ end update process-->
<?php include ('UI - Marquee.php');?>
<?php include ('UI - Logo.php');?>
<?php include ('UI - Search - Engine.php');?>
<?php include ('UI - Down - Navigation.php')?>
<!------------------------------UPDATING INFORMATION--------------------------------------------------->

<div class="container-fluid">
  <h5 class="text-left text-uppercase" style="margin-left: 65px; padding-top: 6px;">My Profile</h5>
  <hr>
  <div class="container">
    <div class="row">
      <!-------------------------------------------START USER UPDATING SECTION--------------------------------->
      <div class="col-sm-6">

        <form class="updatingform" method="POST" action="UI - My - Account.php">
          <h6 class="text-uppercase text-left text-body"
              style="font-size: 20px !important; font-weight: bold !important;"><i class="fas fa-user"></i>UPDATE PROFILE</h6>
          <hr>
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="<?php
$sql = "SELECT name FROM users WHERE email='".$_SESSION['User']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ".$row["name"]." ";
    }
} 
?>"
                   style="border: solid 1px mediumseagreen!important; width: 70%;" required>
          </div>

          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="<?php
$sql = "SELECT email FROM users WHERE email='".$_SESSION['User']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ".$row["email"]." ";
    }
} 
?>"
                   style="border: solid 1px mediumseagreen!important; width: 70%;" required>
          </div>

          <div class="form-group">
            <label for="contact">Contact</label>
            <input type="text" class="form-control" id="contact" name="contact"
                   placeholder="<?php
$sql = "SELECT contact FROM users WHERE email='".$_SESSION['User']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ".$row["contact"]." ";
    }
} 
?>" style="border: solid 1px mediumseagreen!important; width: 70%;" required>
          </div>

          <div class="form-group">
            <label for="location">Location</label>
            <input type="text" class="form-control" id="location" name="location"  placeholder="<?php
$sql = "SELECT location FROM users WHERE email='".$_SESSION['User']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ".$row["location"]." ";
    }
} 
?>"
                   style="border: solid 1px mediumseagreen!important; width: 70%;" required>
          </div>

            <div class="form-group">
            <label for="Password">Password</label>
            <input type="password" class="form-control" id="password" name="password"  placeholder="Password"
                   style="border: solid 1px mediumseagreen!important; width: 70%;  margin-bottom: 25px;" required>
          </div>


          <div class="updating">
          <button type="submit" name="update" class="btn btn-primary">Update</button>
          </div>
        </form>

      </div>
      <!-------------------------------------------USER END UPDATING SECTION--------------------------------->

      <!-----------------------START PHP & MSYQL ECHO USER INFORMATION FROM DATABASE------------------------------->
      <div class="col-sm-6">
        <div class="container-fluid customer-history">
          <div class="heading text-center"><h6>Purchasing History</h6></div>
          <hr>

            <div class="list-group">
              <a href="UI - History.php?action=orders_history" class="list-group-item list-group-item-action list-group-item-success">Order History</a>
              <a href="UI - History.php?action=purchase_history" class="list-group-item list-group-item-action list-group-item-success">Purchased History</a>
            </div>
        </div>
      </div>
      <!-----------------------END PHP & MSYQL ECHO USER INFORMATION FROM DATABASE------------------------------->

    </div>
  </div>

</div>


<!-------------------END UPDATING INFORMATION---------------------------------------------------------------->
<?php include ('UI - Footer.php');?>