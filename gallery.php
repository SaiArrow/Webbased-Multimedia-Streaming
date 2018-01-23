<?php
  include 'connect.php';
  session_start();
  //echo "Welcome ".$_SESSION['pat_name'];

?>
<!DOCTYPE html>
<html>
<title>Gallery</title>
<link rel="shortcut icon" type="image/x-icon" href="images/logo.png" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="font.css">
<link rel="stylesheet" href="font2.css">
<style>
::-webkit-scrollbar { 
    display: none; 
}
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
.ui-datepicker { font-size:8pt !important}
body, html {
    height: 100%;
    color: black;
    line-height: 1.8;
}

/* Create a Parallax Effect */
.bgimg-1, .bgimg-2, .bgimg-3 {
    opacity: 1;
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* First image (Logo. Full height) */
.bgimg-1 {
    background-image: url('image.jpg');
    min-height: 40%;
}

/* Second image (Portfolio) */
.bgimg-2 {
    background-image: url("img_parallax2.jpg");
    min-height: 400px;
}

/* Third image (Contact) */
.bgimg-3 {
    background-image: url("img_parallax3.jpg");
    min-height: 400px;
}

.w3-wide {letter-spacing: 10px;}
.w3-hover-opacity {cursor: pointer;}

#googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(90%);
    filter: grayscale(90%);
}

/* Turn off parallax scrolling for tablets and mobiles */
@media only screen and (max-width: 1024px) {
    .bgimg-1, .bgimg-2, .bgimg-3 {
        background-attachment: scroll;
    }
}
</style>
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <ul class="w3-navbar" id="myNavbar">
    <li class="w3-hide-small w3-right">
      <a href="logout.php" class="w3-padding-large w3-red w3-hover-text-black">LOG OUT</a>
    <li class="w3-hide-small w3-right">
      <a href="cust.php" class="w3-padding-large w3-white w3-hover-text-black"><?php echo $_SESSION['pat_name']; ?></a>
    </li>
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity"><span class="w3-hide-small">  GALLERY</span> </span>
  </div>
</div>

  <div class="w3-container w3-padding-large">

  <img src="images/comics.png" style="width: 200px; height: 70px"><br>
  <!--p style="font-size: 30px;"> COMICS </p-->
  <img src="images/c1.jpg" style="width:150px; height:200px">
  <img src="images/c2.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/c3.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/c4.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/c5.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/c6.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/c7.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/c8.jpg" hspace="10" style="width:140px; height:200px"><br><br><br><br>

  <img src="images/action.jpg" style="width: 250px; height: 120px"><br>
  <!--p style="font-size: 30px;"> ACTION </p-->
  <img src="images/a1.jpg" style="width:150px; height:200px;">
  <img src="images/a2.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/a3.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/a4.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/a5.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/a6.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/a7.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/a8.jpg" hspace="10" style="width:140px; height:200px"><br><br><br><br><br><br>

  <img src="images/fictionimage.jpg" style="width: 270px; height: 110px;"><br><br>
  <img src="images/f1.jpg" style="width:150px; height:200px">
  <img src="images/f2.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/f3.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/f4.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/f5.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/f6.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/f7.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/f8.jpg" hspace="10" style="width:140px; height:200px"><br><br><br><br><br>
  
  <img src="images/horrorimage.jpg" style="width: 250px; height: 120px"><br>
  <img src="images/h1.jpg" style="width:150px; height:200px">
  <img src="images/h2.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/h3.png" hspace="10" style="width:140px; height:200px">
  <img src="images/h4.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/h5.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/h6.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/h7.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/h8.jpg" hspace="10" style="width:140px; height:200px"><br><br><br><br><br>
  

  <img src="images/drama.jpg" style="width: 300px; height: 150px"><br>
  <img src="images/d1.jpg" style="width:150px; height:200px">
  <img src="images/d2.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/d3.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/d4.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/d5.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/d6.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/d7.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/d8.jpg" hspace="10" style="width:140px; height:200px"><br><br><br>
  

  <img src="images/romanceimage.jpg" style="width: 300px; height: 200px"><br>
  <img src="images/r1.jpg" style="width:150px; height:200px">
  <img src="images/r2.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/r3.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/r4.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/r5.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/r6.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/r7.jpg" hspace="10" style="width:140px; height:200px">
  <img src="images/r8.jpg" hspace="10" style="width:140px; height:200px">
  <br>
  <br>
  <br>
  <br>

      <button type="button" value="Book" class="w3-btn w3-left" onclick="location='bookroom.php'">Read Books</button>
   
   <br>
   <br>
  
  </div>
</div>



  </p>
  </ul>
  </div>

  
    </div>
    </div>
   </div>      
        
  
<script>
// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-navbar" + " w3-card-2" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card-2 w3-animate-top w3-white", "");
    }
}
</script>

</body>
</html>

