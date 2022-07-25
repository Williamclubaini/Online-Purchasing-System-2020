
<?php 
include ('Backend - Database - Connection.php');
if(isset($_POST['submit'])){
  $email=$_POST['email'];
  $name=$_POST['name'];
  $question=$_POST['question'];
  $answer=$_POST['answer'];

   $sql = "INSERT INTO faq
VALUES ('NULL','$name', '$email','$question', '$answer')";

if ($conn->query($sql) === TRUE) {
 
  echo "<script>alert('Question Sent...')</script>";
 echo "<script>window.location='UI - Help.php'</script>";


 //$_SESSION['User']=$_POST['email'];
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
?>
<?php include ('UI - Top - Navigation.php');?>
<?php include ('UI - Marquee.php');?>



<!---------------------------------START FAQ HEADER---------------------------------------------------->
<div class="container">
<div class="page-header">
    <h1><small style="font-size: 25px;">FAQ</small></h1>
</div>
</div>
<!---------------------------------FAQ HEADER-------------------------------------------------------->

<!---------------------------------FAQ INFORMATION---------------------------------------------------->
<div class="container">
    <div class="alert alert-warning alert-dismissible" role="alert" style="background-color: mediumseagreen!important; color: #fff; border:solid 1px mediumseagreen!important; height: 60px;">
        <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only" style="color: #fff!important;">Close</span></button>
        <small style="font-size: 16px;">If you cannot find an answer to your question, 
        make sure to contact us or leave your question below.</small>
    </div>



    
  </div>

<div class="container">
  <ul class="list-group" style="cursor: pointer;">
  <?php
              $query="SELECT * FROM faq";
              $result=mysqli_query($conn, $query);
              if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_array($result)){
                  ?>
  <li class="list-group-item" style="font-weight: bold; border: solid 1px #fff;"><?php echo $row["question"];?></li>
  <div class="container"><p><?php echo $row["answer"];?></p></div>
  <?php
}
}?>


  </ul>
</div>
<div class="container-fluid"><hr></div>

<!-----------------------------END FAQ INFORMATION---------------------------------------------------->
<br>
<!------------------------------------------------------------------------------------->
<div class="container">
<div class="row">
<div class="col-sm-6">

<div class="section-header text-center">
          <h3 class="text-success">Our Team</h3>
          <hr class="bg-success">
        </div>

    <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address">
                <i class="fab fa-twitter fa-fw text-success" style="font-size: 25px;"></i>
              <div style="color: mediumseagreen; padding-top: 5px;">
              <h3 style="font-size: 16px; ">Twitter</h3>
           </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-phone">
                 <i class="fab fa-facebook fa-fw text-success" style="font-size: 25px;"></i>
              <div style="color: mediumseagreen; padding-top: 5px;">
              <h3 style="font-size: 16px; ">Facebook</h3>
           </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-email">
              <i class="fab fa-instagram fa-fw text-success" style="font-size: 25px;"></i>
              <div style="color: mediumseagreen; padding-top: 5px;">
              <h3 style="font-size: 16px; ">Email</h3>
              </div>
            </div>
          </div>
        </div>


<div>
  <img class="card-img-top" src="images/slider1.jpg" alt="Card image cap">
</div>




</div>

<div class="col-sm-6">
	
<!-- ======= Contact Section ======= -->
    <section id="contact" class="section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header text-center">
          <h3 class="text-success">Contact Us</h3>
          <hr class="bg-success">
        </div>
        <div class="row contact-info">
          <div class="col-md-4">
            <div class="contact-address" class="text-success">
                <i class="fa fa-map-marker icon text-success"></i>
              <h3 class="text-success">Address</h3>
              <address class="text-success">Private Bag, 186, Malawi</address>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-phone">
                 <i class="fa fa-address-book icon text-success"></i>
              <h3 class="text-success">Phone Number</h3>
              <p><a href="#" class="text-success" style="text-decoration: none;">+265 992 26 34 24</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-email">
              <i class="fa fa-envelope text-success"></i>
              <h3 class="text-success">Email</h3>
              <p><a href="#" class="text-success" style="text-decoration: none;">wlubaini@gmail.com</a></p>
            </div>
          </div>
        </div>

        <div class="form">
          <form action="UI - Help.php" method="POST" role="form" class="php-email-form">
            <div class="form-row">
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" id="name" value="<?php
$sql = "SELECT name FROM users WHERE email='".$_SESSION['User']."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo " ".$row["name"]." ";
    }
} 
?>" data-rule="minlen:50" data-msg="Please enter at least 4 chars" style="border: solid 1px mediumseagreen;" required/>
                <div class="validate"></div>
              </div>
              <div class="form-group col-md-6">
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $_SESSION['User'];?>" data-rule="email" data-msg="Please enter a valid email" style="border: solid 1px mediumseagreen;" required/>
                <input type="hidden" name="answer" value="We are unavailable now, Answer to this question will be provided as soon as we are online">
                <div class="validate"></div>
              </div>
            </div>
           
            <div class="form-group">
              <textarea class="form-control" name="question" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Ask Your Question" style="border: solid 1px mediumseagreen;" required></textarea>
              <small>Your Question Will Be Displayed On This Page</small>
              <div class="validate"></div>
            </div>
            <div class="text-center"><button class="sendbtn success" name="submit" type="submit" style="border: solid 1px mediumseagreen; background-color: mediumseagreen; color: #fff; width: 15%; height: 35px;">Send</button></div>
          </form>
        </div>

      </div>
    </section><!-- End Contact Section -->


</div>
</div>
</div>
 

<!-- Links Enables paragraphs to be able collapse -->
<div class="container">
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</div>
<?php include ('UI - Footer.php');?>