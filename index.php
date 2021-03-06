<!DOCTYPE html>
<html>
<title>Bookflix</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="font2.css">
<style>
::-webkit-scrollbar { 
    display: none; 
}
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
body, html {
    height: 100%;
    color: #777;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4, .mySlides{
    opacity: 1.0;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('image.jpg');
    min-height: 100%;
}
.bgimg-2 {
    background-image: url('hotel1.jpg');
    min-height: 200px;
}
.bgimg-3 {
    background-image: url('team.jpg');
    min-height: 200px;
}

.bgimg-4 {
    background-image: url('map.jpg');
    min-height: 200px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}


/* Turn off parallax scrolling for tablets and mobiles */
@media only screen and (max-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}a

</style>

<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar w3-text-white" id="myNavbar">
    <li><a href="#" class="w3-padding-large"><font color="black"><b>HOME</b></font></a></li>
    <li><a href="signup.php" class="w3-padding-large"><font color="black"><b>SIGN UP</b></font></a></li>
    <li class="w3-hide-small w3-right">
      <a href="login.php" class="w3-padding-large w3-red w3-hover-text-black">LOG IN & READ BOOKS</a>
    </li>
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container"  style="background-image:url('images/b3.jpg')">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-white w3-xlarge w3-wide w3-animate-opacity"> <img src="images/logo.png" height="45">BOOKFLIX <span class="w3-hide-small"> </span> </span>
  </div>
</div>

<!-- Container (About Section) -->

<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">ABOUT US</h3>
  <p class="w3-center"></p>
  <p align="center";>Welcome to our website. We provide you reading books at affordable price, all at the ease of a click!</p><br>
  <p align="center";>Easy to access</p>
  <p align="center";>Saves Time</p>
  <p align="center";>Purchase books at affordable rates</p>
</div>


  <!--<div class="w3-row w3-padding-32 w3-section">-->

    <div class="w3-col m8 w3-container w3-section">
      <div class="w3-large w3-margin-bottom">
        <h4> Contact Us: </h4>
        <i class="fa fa-phone w3-hover-text-black" style="width:30px"></i> Phone: +91 9706413256 / 022 24664117<br>
        <i class="fa fa-envelope w3-hover-text-black" style="width:30px"> </i> Email: bookflix@gmail.com<br>
      </div>
        
  </div>
</div>
  


<!-- Footer -->
<footer class="w3-center w3-padding-64 w3-black">
  <p><right class="w3-center w3-hover-red w3-padding-large"><!--a href="adminlogin.php" class="w3-hover-red">ADMIN LOGIN</a--></right></p>
</footer>

<script>

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", " w3-text-white");
    }
}
</script>

<script>
$( document.getElementById("image") )(function() {
  $( this ).switchClass( "bgimg-2", "bgimg-1", 1000, "easeInOutQuad" );
});
</script>

</body>
</html>

