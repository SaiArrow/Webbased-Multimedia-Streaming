<?php
	include 'connect.php';
	session_start();
	$user_id=$_SESSION['user_id'];
  $book_name=$_SESSION['book_name'];
  //$book_id=$_SESSION['book_id'];
?>

<!DOCTYPE html>
<html>
<title>Bill</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="logo.png" />
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
    min-height: 30%;
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
      <a href="manager.php" class="w3-padding-large w3-white w3-hover-text-black"><?php echo $_SESSION['pat_name']; ?></a>
    </li>
  </ul>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-opacity w3-display-container">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-xlarge w3-black w3-xlarge w3-wide w3-animate-opacity">MY<span class="w3-hide-small">  HOME</span> </span>
  </div>
</div>


<!-- Container (Section) -->
<div class="w3-row w3-padding-32 w3-section">
  <div class="w3-col m2 w3-container">
  <ul class="w3-card-16 w3-ul w3-hoverable">
  <p>
  <li class="w3-padding-xlarge w3-center "><a href="userhome.php" style="text-decoration: none">My HomePage</a></li>
  <li class="w3-padding-xlarge w3-center"><a href="bookroom.php" style="text-decoration: none">Read Books</a></li>
  <li class="w3-padding-xlarge w3-center w3-deep-purple"><a href="bookedhistory.php" style="text-decoration: none">Books History</a></li>
  
  
  </p>
  </ul>
  </div>
  	<div class="w3-col m8 w3-container">
  	
  	<p class="w3-center"><em>Bill<em></p>
	<div class="w3-container">
  

  <table class="w3-table-all w3-card-4">
    <tr>
     
      <th> Book Name</th>
      <th> Author Name </th>
      <th> Date of Publication </th>
      <th> Genre </th>  
      <th> Charge</th>
     
      </tr>
     
      <?php 
     $sql="SELECT * FROM book_details where book_name='$book_name' ";
    
  	$result = $mysqli->query($sql) or die("BOOM");
  	$result1=mysqli_num_rows($result);
  	

      while($row=mysqli_fetch_assoc($result)) 
     { 
    
    	echo'<tr>';
        
   
		//echo '<td>' . $row['_name'] . '</td>';
		echo '<td>' . $row['book_name'] . '</td>';
		echo '<td>' . $row['author_name'] . '</td>';
		echo '<td>' . $row['year_of_pub'] . '</td>';
		echo '<td>' . $row['genre'] . '</td>';
		//echo '<td>' . 'Plot No.: 345, Wellness Center, Link Road, D. N. Nagar, Opp. M. R. Pharmacy, Andheri - (West),Mumbai - 400057, Maharashtra' . '</td>';
		echo '<td>' . 'Rs. 500' . '</td>';
      
      	echo '<td><a href="exp2.php?id=' . $row['book_id'] . '" target="blank">Print Bill</a></td>';

		//echo '<td><a href="delete.php?id=' . $row['Roomno'] . '">Delete</a></td>';

      echo'</tr>';
    }
    ?>
    
  </table>
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

