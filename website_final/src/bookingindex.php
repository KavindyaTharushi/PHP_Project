<?php
	session_start();
	global $user_id;
	global $email;
	global $name;
	global $phone;
	global $last_name;
 
	if (isset($_SESSION['user_id'])) {
		  $user_id = $_SESSION['user_id'];
		  $email = $_SESSION['email'];
		  $name = $_SESSION['name'];
		  $phone = $_SESSION['phone'];
		  $last_name = $_SESSION['last_name'];
	   } else {
		  header("Location: Login.php");
		  exit();
	}


?>



<html>
<head>
	<link rel="stylesheet" href = "styles/styles1.css">
	<script src= "js/myjScript.js"></script>
	<script src="js/myScript.js"></script>

    <?php
     require 'config.php';
    ?>

</head>

<body>


	<h2><em>SkylineSells</em></h2>

	<div class="profile">
	  <img src="images\user-profile-icon.jpg" alt="User Profile" class="profile-icon" onclick="toggleMenu()">
	  <div class="dropdown-menu" id="dropdownMenu">
	    <a href="Profile.php">Profile</a>
	    <a href="Settings.php">Settings</a>
	    <a href="logout.php">Logout</a>
	  </div>
	</div>



	<nav>

	  <img class="logo" src="images\apartmentlogo.png" alt="Apartment LOGO">
	  
	<ul class= "menu">

	<li> <a href = "Home.php"> Home </a> </li>
	<li> <a href = "readPropertyList.php"> Property List </a> </li>
	<li> <a href = "Service.php"> Service </a> </li>
	<li> <a href = "About.php"> About </a> </li>
	<li> <a href="maincomment.php">FAQ</a></li>

	</ul>

	</nav>
	<br>
	<h2>Insert Booking Record</h2>
	<div class="container">
		<div class="form-box">
			<form method="post" action="bookinginsert.php">

		            <BR>ID : <input type="text" readonly  value="<?php echo $user_id; ?>" ><BR>

		            <BR>Apartment Name :<input type="text" name="sapartment_name"><BR>
		            <BR>First Name :<input type="text" name="sfirst_name"  value="<?php echo $name; ?>"><BR>

		           <BR> Last Name  :<input type="text" name="slast_name" value="<?php echo $last_name; ?>"><BR>

		           <BR> Phone Number  :<input type="tel" name="sphone_number" value="<?php echo $phone; ?>"><BR>

		            <BR>Email :<input type="email" name="semail" value="<?php echo $email; ?>"><BR>

		            <BR>Booking Date : <input type="date" name="sbooking_date"><br>


		          <BR><input type="submit"value="confirm">

		         

			</form>
	</div>
	</div>
	<footer>
<div class="icons">
   <img class="icon" src ="images/facebook.jpg" alt="facebook logo">
   <img class="icon" src ="images/linkedIn.jpg" alt="linkedln logo">
   <img class="icon" src ="images/instagram.jpg" alt="instagram logo">
   <img class="icon" src ="images/twitter.png" alt="twitter logo">
</div>  
  
 <br><br><br>
 
<div class="footer-details"> 
 <a href="contactus.php" class="footer-details">Contact Us</a>
 <a href="terms&condition.php" class="footer-details">Terms & conditions</a>
 <a href="privacy&policy.php" class="footer-details">Privacy & Policy</a>
 </div>

 

</footer>

</body>

</html>
