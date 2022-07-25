
<?php

$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['create'])){
  if($_GET["create"] == "createdb"){

// Create database

$sql = "CREATE DATABASE `hbwonlinepurchasingsystem`";
if ($conn->query($sql) === TRUE) {
echo "Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}
 
$conn = mysqli_connect("localhost","root","","hbwonlinepurchasingsystem");
 
// sql to create table
$sql= "CREATE TABLE `faq` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}


$conn = mysqli_connect("localhost","root","","hbwonlinepurchasingsystem");
$sql= "INSERT INTO `faq` (`id`, `name`, `email`, `question`, `answer`) VALUES
(3, 'William C Lubaini', 'lubainiwc@gmail.com', 'How can i delete my account?', 'Users are not able to delete their accounts. '),
(6, 'William C Lubaini', 'lubainiwc@gmail.com', 'How can I view purchasing history?', 'Click on \"ACCOUNT\" then to the right side there are two options \"Order or Purchasing History\" choose one.'),
(7, 'William C Lubaini', 'lubainiwc@gmail.com', 'How can I recover my password?', 'Click on \"My Account\" then recover or provide a new password by providing a correct email.'),
(8, 'William C Lubaini', 'lubainiwc@gmail.com', 'What happens if I do not pay for orders within 3 days?', 'Your orders will be deleted or removed.'),
(9, 'William C Lubaini', 'lubainiwc@gmail.com', 'How can I view my orders history?', 'Click on \"Place an Order\" button then click on \"View Orders\"'),
(10, ' William C Lubaini ', 'lubainiwc@gmail.com', 'How do I search for the product I want?', 'You can TYPE first letter of the product you are looking for, results will displayed randomly. ')";

if ($conn->query($sql) === TRUE) {
echo "insert successfully";
} else {
echo "Error creating table1: " . $conn->error;
}



$conn = mysqli_connect("localhost","root","","hbwonlinepurchasingsystem");


$sql= "CREATE TABLE `new_products` (
  `id` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";


if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table2: " . $conn->error;
}


$conn = mysqli_connect("localhost","root","","hbwonlinepurchasingsystem");


$sql="INSERT INTO `new_products` (`id`, `image`, `product_name`, `product_price`) VALUES
(100, 'images/705.jpg', 'Integrino Biskets', 10500.00),
(101, 'images/724.jpg', 'Sprite - Soft Drinks', 8500.00),
(102, 'images/725.jpg', 'Pine Apple Biskets', 5500.00),
(104, 'images/720.jpg', 'Jiggies', 6500.00),
(105, 'images/737.jpg', 'Choccolate Cream Biskets', 7500.00)";

if ($conn->query($sql) === TRUE) {
echo "insert successfully";
} else {
echo "Error creating table: " . $conn->error;
}


$conn = mysqli_connect("localhost","root","","hbwonlinepurchasingsystem");
$sql= "CREATE TABLE `orders` (
  `id` int(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `checkout_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table3: " . $conn->error;
}


$conn = mysqli_connect("localhost","root","","hbwonlinepurchasingsystem");
$sql= "CREATE TABLE `payments` (
  `id` int(50) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `total_amount` varchar(255) NOT NULL,
  `transaction_date` varchar(255) NOT NULL,
  `payment_type` varchar(255) NOT NULL,
  `cost_and_location` varchar(255) NOT NULL,
  `contact` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table4: " . $conn->error;
}


$conn = mysqli_connect("localhost","root","","hbwonlinepurchasingsystem");
$sql="INSERT INTO `payments` (`id`, `name`, `email`, `location`, `total_amount`, `transaction_date`, `payment_type`, `cost_and_location`, `contact`) VALUES
(3, ' William C Lubaini ', 'lubainiwc@gmail.com', ' Biwi ', '1,500.00', '2020-07-26', 'Airtel Money', 'Mnchesi & Biwi - K1000', ' 099226342'),
(4, ' William C Lubaini ', 'lubainiwc@gmail.com', ' Biwi ', '4,400.00', '2020-07-28', 'Internet Banking', 'I Will Collect My Products', ' 099226342'),
(5, ' William C Lubaini ', 'lubainiwc@gmail.com', ' Biwi ', '1,620.00', '2020-07-29', 'Airtel Money', 'Mnchesi & Biwi - K1000', ' 099226342'),
(6, ' William C Lubaini ', 'lubainiwc@gmail.com', ' Biwi ', '4,400.00', '2020-07-29', 'Airtel Money', 'Mnchesi & Biwi - K1000', ' 099226342'),
(7, ' William C Lubaini ', 'lubainiwc@gmail.com', ' Biwi ', '13.50', '2020-07-31', 'Airtel Money', 'Mnchesi & Biwi - K1000', ' 099226342'),
(8, ' William C Lubaini ', 'lubainiwc@gmail.com', ' Biwi ', '790.00', '2020-08-02', 'Airtel Money', 'Mnchesi & Biwi - K1000', ' 099226342'),
(9, ' William C Lubaini ', 'lubainiwc@gmail.com', ' Biwi ', '25,144.00', '2020-08-03', 'Internet Banking', 'Area 6, 15 & 47 - K1800', ' 099226342')";

if ($conn->query($sql) === TRUE) {
echo "insert successfully";
} else {
echo "Error creating table: " . $conn->error;
}


$conn = mysqli_connect("localhost","root","","hbwonlinepurchasingsystem");

$sql="CREATE TABLE `products_table` (
  `id` int(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table5: " . $conn->error;
}


$conn = mysqli_connect("localhost","root","","hbwonlinepurchasingsystem");

$sql="INSERT INTO `products_table` (`id`, `image`, `product_name`, `product_price`) VALUES
(1, 'images/300.jpg', 'Zoom Apple Gum[Packet]', 15000.00),
(2, 'images/301.jpg', 'Beer - All flavours[Crate]', 10500.00),
(3, 'images/302.jpg', 'Daily Lightening Vaseline[Carton]', 9500.00),
(4, 'images/304.jpg', 'Buxet Luxury Soap[Packet]', 7500.00),
(5, 'images/306.jpg', 'Chewits Bubble Gum[Carton]', 4500.00),
(6, 'images/308.jpg', 'College Exercise Books[Carton]', 8000.00),
(7, 'images/309.jpg', 'Cosmetics[Set]', 14500.00),
(8, 'images/310.jpg', 'Dawn For Men[Carton]', 13500.00),
(9, 'images/3.jpg', 'Ama SipSip[Carton]', 6500.00),
(10, 'images/313.jpg', 'Dubble Bubble Gum[Packet]', 6000.00),
(11, 'images/214.jpg', 'Glucose Biscuits[Packet]', 7500.00),
(12, 'images/301.jpg', 'Toilet Paper Rolls[Packet]', 4500.00),
(13, 'images/325.jpg', 'Nivea For Men[Carton]', 3500.00),
(14, 'images/324.jpg', 'Milk - All Types[Carton]', 9500.00),
(15, 'images/323.jpg', 'Maoam Bubble Gum[Carton]', 9000.00),
(16, 'images/4.jpg', 'Appy Apple[Carton]', 7000.00),
(17, 'images/317.jpg', 'Grape Juice Drink[Set]', 12000.00),
(18, 'images/320.jpg', 'Kombeza[Carton]', 9500.00),
(19, 'images/3.jpg', 'Ama SipSip[Packet]', 7400.00),
(20, 'images/301.jpg', 'Beer - All flavours[Crate]', 15000.00),
(21, 'images/324.jpg', 'Milk - All Types[Carton]', 8400.00),
(22, 'images/317.jpg', 'Grape Juice Drink[Set]', 8000.00),
(23, 'images/320.jpg', 'Kombeza[Carton]', 10500.00),
(24, 'images/6.jpg', 'Soft Fruit Drinks[Carton]', 7300.00),
(25, 'images/330.jpg', 'Soft Drinks[Crate]', 5500.00),
(26, 'images/300.jpg', 'Zoom Apple Juicy Drink[Packet]', 6400.00),
(27, 'images/331.jpg', 'Soft Tin Drinks[Set]', 7300.00),
(28, 'images/736.jpg', 'Sprite', 9500.00),
(29, 'images/728.jpg', 'Energy Drinks [Set]', 7900.00),
(30, 'images/704.jpg', 'Enjoy Juice [Carton]', 9500.00),
(31, 'images/313.jpg', 'Dubble Bubble Gum[Packet]', 7.30),
(32, 'images/306.jpg', 'Chewits Bubble Gum[Crate]', 7.50),
(33, 'images/319.jpg', 'Juicy Fruit Bubble Gum[Carton]', 5.70),
(34, 'images/322.jpg', 'Lifesaver Gummies[Set]', 8.30),
(35, 'images/712.jpg', 'Dubble Bubble - Bubble Gum [Packet]', 7600.00),
(36, 'images/723.jpg', 'Galaxy Rocks Bubble - All Flavours Available', 10000.00),
(37, 'images/729.jpg', 'Rain Blo - Bubble Gum [Packet]', 8000.00),
(38, 'images/800.jpg', 'Bubblelicius Bubble Gum [Packet]', 9500.00),
(39, 'images/323.jpg', 'Maoam[Packet]', 4700.00),
(40, 'images/6.jpg', 'Soft Fruit Drinks[Carton]', 6300.00),
(41, 'images/70.jpg', 'Coconut Cream Biscuits[Packet]', 6500.00),
(42, 'images/9.jpg', 'Tiger Glucose[Packet]', 5.50),
(43, 'images/214.jpg', 'Glucose Biscuits[Carton]', 6500.00),
(44, 'images/726.jpg', 'Nabill Glucose [Carton]', 9800.00),
(45, 'images/402.jpg', 'Lolilpop[Carton]', 9000.00),
(46, 'images/732.jpg', 'Sandwich Cookies Biskets [Carton]', 9500.00),
(47, 'images/725.jpg', 'Pine Apple [Carton]', 9700.00),
(48, 'images/713.jpg', 'Delicia Biskets - All Flavours Available [Carton]', 9.00),
(49, 'images/401.jpg', 'Sweets[Packet]', 8000.00),
(50, 'images/71.jpg', 'Skittles Sweet [Packet]', 10000.00),
(51, 'images/72.jpg', 'Soft Gum Sweet [Packet]', 13000.00),
(52, 'images/73.jpg', 'Jujubes Sweet [Packet]', 12500.00),
(53, 'images/721.jpg', 'New! Sweets [Packet]', 10400.00),
(54, 'images/737.jpg', 'New! Marsitan [Packet]', 10400.00),
(55, 'images/735.png', 'Lolilpop Sweets - All Flavours Available [Packet]', 9400.00),
(56, 'images/738.jpg', 'New! Tamu Lolilpop Sweets - All Flavours Available [Packet]', 7400.00),
(57, 'images/308.jpg', 'College Exercise Books[Carton]', 13500.00),
(58, 'images/308.jpg', 'College Exercise Books[Carton]', 13500.00),
(59, 'images/318.jpg', 'Hard Cover[Carton]', 7900.00),
(60, 'images/321.jpg', 'File[Carton]', 9800.00),
(61, 'images/326.jpg', 'Files[carton]', 10000.00),
(62, 'images/318.jpg', 'Note Books[Carton]', 7300.00),
(63, 'images/50.jpg', 'Walkers[Carton]', 8300.00),
(64, 'images/727.png', 'Popper Duos Crisps', 9500.00),
(65, 'images/720.jpg', 'Jiggies - All Flavours Available [Packets]', 13500.00),
(66, 'images/709.png', 'Simba Crisps', 12500.00),
(67, 'images/310.jpg', 'Dawn For Men[Carton]', 13500.00),
(68, 'images/311.jpg', 'Dawn For Men - Small[Carton]', 9500.00),
(69, 'images/302.jpg', 'Vaseline - Body Lotion[Carton]', 6700.00),
(70, 'images/304.jpg', 'Butex Luxury Soap[Carton]', 8500.00),
(71, 'images/325.jpg', 'Nivea[carton]', 4000.00),
(72, 'images/327.jpg', 'Vaseline - SmallCarton]', 7300.00),
(73, 'images/706.jpg', 'Clere [carton]', 6600.00),
(74, 'images/715.jpg', 'Repair and Care [carton]', 5500.00)";

if ($conn->query($sql) === TRUE) {
echo "insert successfully";
} else {
echo "Error creating table: " . $conn->error;
}




$conn = mysqli_connect("localhost","root","","hbwonlinepurchasingsystem");

$sql="CREATE TABLE `purchasing_history` (
  `id` int(10) NOT NULL,
  `email` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `quantity` int(255) NOT NULL,
  `order_date` varchar(255) NOT NULL,
  `checkout_status` varchar(255) NOT NULL,
  `total_amount` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table6: " . $conn->error;
}


$conn = mysqli_connect("localhost","root","","hbwonlinepurchasingsystem");

$sql="INSERT INTO `purchasing_history` (`id`, `email`, `product_name`, `product_price`, `quantity`, `order_date`, `checkout_status`, `total_amount`) VALUES
(1, 'lubainiwc@gmail.com', '', 0.00, 0, '', 'Paid', '168.00')";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table: " . $conn->error;
}

$conn = mysqli_connect("localhost","root","","hbwonlinepurchasingsystem");

$sql="CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `location` varchar(50) NOT NULL,
  `password` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table7: " . $conn->error;
}



$conn = mysqli_connect("localhost","root","","hbwonlinepurchasingsystem");


$sql="INSERT INTO `users` (`id`, `name`, `email`, `contact`, `location`, `password`) VALUES
(1, 'William C Lubaini', 'lubainiwc@gmail.com', '0992263424', 'Biwi', 25),
(2, 'Mada', 'lubainim@gmail.com', '0885658440', 'Biwi', 328882),
(3, 'Benmax', 'benmax@gmail.com', '0888888888', 'Chilinde', 25)";


if ($conn->query($sql) === TRUE) {
header("location:index.php");
} else {
echo "Error creating table: " . $conn->error;
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


<br>
<br>
<br>
<div class="container">
	<div class="container">
		<div class="container">
			<div class="container">
				<div class="container">
<a class="btn btn-success btn-lg"  href="CreateDB.php?create=createdb" role="button" style=" font-size: 17px;">Create Database</a>
</div>
</div>
</div>
</div>
</div>




</body>
</html>