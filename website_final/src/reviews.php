<!DOCTYPE html>
<html>

<head>
    <title>View Reviews</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="styles/style.css">
    <script src="js/myScript.js"></script>
    <script src="js/script.js"></script>
    
</head>

<body>
<h2><em>SkylineSells</em></h2>

<div class="profile">
  <img src="images\user-profile-icon.jpg" alt="User Profile" class="profile-icon" onclick="toggleMenu()">
  <div class="dropdown-menu" id="dropdownMenu">
    <a href="Profile.php">Profile</a>
    <a href="Settings.html">Settings</a>
    <a href="logout.php">Logout</a>
  </div>
</div>
<nav>

  <img class="logo" src="images\apartmentlogo.png" alt="Apartment LOGO">
  <button class="button1"><a href="seller.php">Post Your Ad</a></button>
<ul class= "menu">

<li> <a href = "Home.php"> Home </a> </li>
<li> <a href = "readPropertyList.php"> Property List </a> </li>
<li> <a href = "service.php"> Service </a> </li>
<li> <a href = "aboutus.php"> About </a> </li>
<li> <a href="reviews.php">View Reviews</a>
<li> <a href="maincomment.php">FAQ</a>


</ul>

</nav>
<p class=topic>Reviews</p>
    <br>
    <div class="review">
        <button id="btn1" class="style_btn1"><a href="form.php">Write Your Review</a></button>
    </div>
    <br><br><br>
    <?php
      require 'read.php';
    ?>
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

