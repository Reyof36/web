<?php require_once 'style/header.php';?>


<title> Pet Cat | Home Page </title>
<br>
<br>
<hr>
<br>
<br>

<style>
/* Slideshow container */
.slideshow {
  max-width: 80%;
  position: relative;
  margin-top: 50px;
  margin-left: auto;
  margin-right:auto;
  margin-bottom: 6px;
}
/* The dots */
.dot {
  height: 15px;
  width: 15px;
  margin-top: 0;
  margin-left: 4px;
  margin-right: 4px;
  margin-bottom: 20px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
}
.active {
  background-color: #717171;;
}

</style>

  <!--body-->
<!-- Slidshow -->

<div class="slideshow">

<div class="mySlides">
<a href="aboutUsPage.php"><img src="style/WelcomeSlide1.png" alt="cat" height="400" style="width:100%"> </a>
</div>

<div class="mySlides">
<a href="#contentCard"><img src="style/TopicSlide.png"  alt="cat" height="400" style="width:100%; "></a>
</div>

<div class="mySlides">
<a href="#"><img src="style/FollowSlide.png" alt="cat" height="400" style="width:100%"></a>
</div>
</div>
<br>
<!--Dot-->
<div style="text-align:center">
<span class="dot"></span>
<span class="dot"></span>
<span class="dot"></span>
</div>


  <div class="container-flex">


<div class="row">
  <div class="column">
    <div class="card">
      <img src="style/pc4.jpg" alt="cat" id="imgCard" >

      <p> <a href="aboutUsPage.php">  <button style="width:100%; padding:15px; background-color:black; color:white; display: inline-block; cursor: pointer; text-align: center; font-size: 16px;"> Read More</button> </a> </p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="style/pc4.jpg" alt="cat" id="imgCard" >

      <p> <a href="aboutUsPage.php">  <button style="width:100%; padding:15px; background-color:black; color:white; display: inline-block; cursor: pointer; text-align: center; font-size: 16px;"> Read More</button> </a> </p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="style/pc4.jpg" alt="cat" id="imgCard" >

      <p> <a href="aboutUsPage.php">  <button style="width:100%; padding:15px; background-color:black; color:white; display: inline-block; cursor: pointer; text-align: center; font-size: 16px;"> Read More</button> </a> </p>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="style/pc4.jpg" alt="cat" id="imgCard" >

      <p> <a href="aboutUsPage.php">  <button style="width:100%; padding:15px; background-color:black; color:white; display: inline-block; cursor: pointer; text-align: center; font-size: 16px;"> Read More</button> </a> </p>
    </div>
  </div>
  <div class="column">
    <div class="card">
      <img src="style/pc4.jpg" alt="cat" id="imgCard" >

      <p> <a href="aboutUsPage.php">  <button style="width:100%; padding:15px; background-color:black; color:white; display: inline-block; cursor: pointer; text-align: center; font-size: 16px;"> Read More</button> </a> </p>
    </div>
  </div>
</div>
  </div>
  <br>
 <hr>
<br>
<br>

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

  setTimeout(showSlides, 3000); // Change image every 3 seconds
}
</script>

<?php require_once 'style/footer.php';?>

<!--References of Content:
1- https://pawsomekitty.com
2- https://www.readersdigest.com.au -->
<!--References of Code:
1- W3schools.
2- -->
