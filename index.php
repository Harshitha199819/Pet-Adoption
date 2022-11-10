<?php include('server.php') ?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;
align-items: center;
width: 50%;
height: 50%;}
</style>
<link rel="stylesheet" href="style.css">
</head>
<body style="background-color: #EEE8AA;">
  

  <h1 style="text-align: center;">PET ADOPTION SYSTEM</h1>

<ul>
  <li><a class="active" href="index.html">Home</a></li>
  <li><a href="viewpets.php">View Pets</a></li>
  <li><a href="gallery.php">Gallery</a></li>
  <li><a href="about.php">About</a></li>
  <li><a href="reg_or_login.php">Register/Login</a></li>
</ul>
<br><br><br><br>
<div class="w3-content w3-display-container">
  <img class="mySlides" src="dog.jpg" style="width:100%">
  <img class="mySlides" src="cat.jpg" style="width:100%">
  <img class="mySlides" src="dog2.jpg" style="width:100%">
  <img class="mySlides" src="cat2.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
var slideIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  slideIndex++;
  if (slideIndex > x.length) {slideIndex = 1}
  x[slideIndex-1].style.display = "block";
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<div class="footer">
  <center>Thank you for visiting!</center>
  </div>

</body>
</html>
