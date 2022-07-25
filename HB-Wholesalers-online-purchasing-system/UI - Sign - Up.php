<?php
session_start();
include ('Backend - Shopping - Cart- Process.php');



if($_SERVER['REQUEST_METHOD']=='POST'){
  
  $name =($_POST['name']);
  $email =($_POST['email']);
  $contact =($_POST['contact']);
   $location =($_POST['location']);
  $password =md5($_POST['password']);
 

  $sql = "INSERT INTO users
VALUES ('NULL','$name', '$email','$contact','$location', '$password')";


if ($conn->query($sql) === TRUE) {
 header('location:UI - Account.php');
 $_SESSION['User']=$_POST['email'];
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="javascript.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="cssfonts/all.css">
<body>

<!------------------------------FORM--------------------------------------------------->
<div class="container-fluid">
  <div class="container form-box2">
<form action="UI - Sign - Up.php" method="POST" style="max-width:500px;margin:auto">
<h2 class="text-center text-success">Sign Up</h2>
  <div class="container"><hr></div>

  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="name" required>
  </div>


  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="email" required>
  </div>

  <div class="input-container">
    <i class="fa fa-address-book icon"></i>
    <input class="input-field" type="tel" minlength="10" maxlength="10" placeholder="Contact" name="contact" required>
  </div>

  <div class="input-container">
    <i class="fa fa-map-marker icon"></i>
    <input class="input-field" type="text" placeholder="Location" name="location" required>
  </div>


  <div class="input-container">
    <i class="fa fa fa-eye icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" required>
  </div>

 

  <button type="submit" name="Submit" class="btn">Sign Up</button>
  <br><br><br>
   <div class="container text-center">
    <span><em>Already have an account?</em> <a href="index.php" class="text-success">Login Now</a></span>
           
          </div>
</form>
</div>
</div>

<!-------------------END LOGIN FORM---------------------------------------------------------------->

</body>
</html>