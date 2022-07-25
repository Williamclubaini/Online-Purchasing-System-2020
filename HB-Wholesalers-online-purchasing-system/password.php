<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "hbwonlinepurchasingsystem";

// Create connection
$conn = new mysqli($servername, $username,$password,$database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['Submit'])){


$sql = "UPDATE users SET password='".md5($_POST['password'])."' WHERE email='".$_POST['email']."'";

if ($conn->query($sql) === TRUE) {
   header("location:index.php");
} else {
    echo "Error updating record: " . $conn->error;
}
}
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<script type="text/javascript" src="javascript.js"></script>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
  <link rel="stylesheet" type="text/css" href="cssfonts/all.css">
   <link href="images/704.jpg" rel="icon">
</head>

<body>

<!------------------------------FORM--------------------------------------------------->
<div class="container-fluid">
  <div class="container form-box">
<form action="password.php" method="POST" style="max-width:500px;margin:auto; ">

  <h2 class="text-center text-success">Recover Your Password</h2>
  <div class="container"><hr></div>
       <div>

</div>

  <div class="input-container">

    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="email" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa fa-eye icon"></i>
    <input class="input-field" type="password" placeholder="Enter Your New Password" name="password" required>
  </div>


  <button type="submit" class="btn" name="Submit">Submit</button>
<br><br><br>

  <div class="container text-center">
    <span><em>Don't have an account?</em> <a href="UI - Sign - Up.php" class="text-success">Sign Up Now</a></span>
           
         
</form>
</div>
</div>

<!-------------------END LOGIN FORM---------------------------------------------------------------->
</body>
</html>