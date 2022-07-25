
<!-----------------------------------------MOST PURCHASED PRODUCTS SECTION------------------------------------------>
<div class="container">
  <div class="row">
    <!------------------------------------------START 1st col-sm-6----------------------------------------------------------->
    <div class="col-sm-6">
      <h3 class="text-uppercase">Most Purchased</h3>
      <div class="item" style="height: auto;">
        <div class="slideshow-container">

          <div class="mySlides">
            <img src="images/307.jpg" style="width:100%">

            <div class="text">
  <span style="font-size: 35px;
  font-weight: bold;
  ">Discount Offer</span>
              <span style="color: tomato;
    font-weight: bold;
    font-size: 50px;
    "><em>25%</em></span>
            </div>

          </div>

          <div class="mySlides">
            <img src="images/331.jpg" style="width:100%">


            <div class="text"><span style="font-size: 35px; color: mediumseagreen;
  font-weight: bold;
  ">Save Up To</span>
              <span style="color: tomato;
    font-weight: bold;
    font-size: 50px;
    "><em>MK500</em></span>
            </div>


          </div>

          <div class="mySlides">
            <img src="images/300.jpg" style="width:100%">

            <div class="text">
    <span style="color: mediumseagreen;
    font-weight: bold;
    font-size: 50px;
    "><em>15% </em></span>
              <span style="font-size: 35px;
  font-weight: bold; color: #fff; ">OFF Of First Order</span>

            </div>

          </div>



        </div>
        <br>

        <div class="dotclass" style="text-align:center;">
          <span class="dot"></span>
          <span class="dot"></span>
          <span class="dot"></span>
        </div>
      </div>
    </div>
    <!------------------------------------------END 1st col-sm-6----------------------------------------------------------->

    <!------------------------------------------START 2nd col-sm-6----------------------------------------------------------->
    <div class="col-sm-6">
      <h3 class="text-uppercase">Top Selling Products</h3>
      <div class="item" style="height: auto;">
          <div id="carousel-name" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carousel-name" data-slide-to="0" class="active"></li>
<li data-target="#carousel-name" data-slide-to="1"></li>
<li data-target="#carousel-name" data-slide-to="2"></li>
</ol>

<div class="carousel-inner" role="listbox">
<div class="carousel-item active">
<img class="d-block img-fluid" src="images/4.jpg" alt="First slide" style="border:solid 1px mediumseagreen;">
<div class="carousel-caption d-none d-md-block">
<small>Buy high quality of goods at low price</small>
</div>
</div>
<div class="carousel-item">
<img class="d-block img-fluid" src="images/50.jpg" alt="Third slide" style="border:solid 1px mediumseagreen;">
<div class="carousel-caption d-none d-md-block">
<small>Buy high quality of goods at low price</small>
</div>
</div>
<div class="carousel-item">
<img class="d-block img-fluid" src="images/304.jpg" alt="Third slide" style="border:solid 1px mediumseagreen;">
<div class="carousel-caption d-none d-md-block">
<small>Buy high quality of goods at low price</small>
</div>
</div>
</div>

<a class="carousel-control-prev" href="#carousel-name" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carousel-name" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
    </div>
    </div>
    <!------------------------------------------END 2nd col-sm-6----------------------------------------------------------->

  </div>
</div>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="OwlCarousel2-2.3.4/docs/assets/vendors/jquery.min.js"></script>

<script type="text/javascript" src="OwlCarousel2-2.3.4/dist/owl.carousel.js"></script>
<script>
  var slideIndex = 0;
  showSlides();

  function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 5000); // Change image every 5 seconds
  }
</script>