
<?php
session_start();
$_SESSION['cart']=array();

include ('Backend - Database - Connection.php');



if(isset($_POST['Submit'])) 

{
if(empty($_POST['email'])|| empty($_POST['password']))
{
header("location:index.php");
}
else{

$query="select * from users where email='".$_POST['email']."' and password='".md5($_POST['password'])."'";

$result=mysqli_query($conn,$query);


if (mysqli_fetch_assoc($result)) 
{
  $_SESSION['User']=$_POST['email'];
  header("location:UI - Account.php");
}
else{
  header("location:index.php?invalid=Incorrect email or password");
}
}
}

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
<form action="index.php" method="POST" style="max-width:500px;margin:auto; ">

  <h2 class="text-center text-success">Login</h2>
  <div class="container"><hr></div>
       <div>
   <?php
if (@$_GET['invalid']==true) 
{
?>

<p style="text-align: center; color: crimson; background-color: #fff; opacity: 0.8;"><?php echo $_GET['invalid'] ?></p>

<?php
}
  ?>
</div>

  <div class="input-container">

    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="email" placeholder="Email" name="email" required>
  </div>
  
  <div class="input-container">
    <i class="fa fa fa-eye icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" required>
  </div>


  <button type="submit" class="btn" name="Submit">Login</button>
<br><br><br>

  <div class="container text-center">
    <span><em>Don't have an account?</em> <a href="UI - Sign - Up.php" class="text-success">Sign Up Now</a></span>
           
          </div>
          <div class="container text-center"><a href="password.php" class="text-success"><em>Forgot Password?</em></a></span>
           
          </div>
</form>
</div>
</div>

<!-------------------END LOGIN FORM---------------------------------------------------------------->
</body>
</html>