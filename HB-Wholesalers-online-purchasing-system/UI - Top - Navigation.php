<?php
@session_start();

if (isset($_SESSION['User'])) {
 


 //echo '<a href="logout.php?logout">Log Out</a>';
}
else{
  header("location:index.php");
}
?>

<head>
	<title>BITProject</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<script type="text/javascript" src="javascript.js"></script>
  <link href="images/704.jpg" rel="icon">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
  <link rel="stylesheet" type="text/css" href="cssfonts/all.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css"/>
  <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.css">
  <link rel="stylesheet" type="text/css" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-3.5.1.js"></script>
	<script src="js/jquery.js"></script>
	<script src="js/propper.js"></script>
	<script src="js/propper.map"></script>
</head>
<body>

<!------------------------------TOP NAVIGATION--------------------------------------------------->
<div class="container-fluid">
<nav class="navbar navbar-expand-sm topnav">
  <ul class="navbar-nav topnv">
    <li class="nav-item text-body">
      <a class="nav-link text-body" href="#"><i class="fas fa-user-circle"></i><?php echo 'Welcome - '.$_SESSION['User'].'';?></a>
    </li>
    <li class="nav-item text-body">
      <a class="nav-link text-body" href="UI - Account.php"><i class="fas fa-home"></i>Home</a>
    </li>
    <li class="nav-item text-body">
      <a class="nav-link text-body" href="UI - My - Account.php"><i class="fas fa-user-circle"></i>My Account</a>
    </li>
    <li class="nav-item text-body">
      <a class="nav-link text-body" href="UI - My - Cart.php?cart=shoppingcart"><i class="fas fa-shopping-cart"></i>My Cart  <span class="badge badge-warning" style="border-radius: 8px;"><?php
echo count($_SESSION['cart']);
?></span></a>
    </li>


    <li class="nav-item text-body">
      <a class="nav-link text-body" href="Backend - Logout.php?logout"><i class="fas fa-sign-out-alt"></i>Log Out</a>
    </li>

    <li class="nav-item text-body">
      <a class="nav-link text-body" href="UI - Help.php"><i class="fas fa-question-circle"></i>Help</a>
    </li>

    
  </ul>
</nav>

</div>
<!-------------------TOP NAVIGATION------------------------------------------------------------->
