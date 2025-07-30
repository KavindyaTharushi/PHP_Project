<?php 
   session_start();
   global $user_id;
   global $email;
   global $name;
   global $phone;

   if (isset($_SESSION['user_id'])) {
         $user_id = $_SESSION['user_id'];
         $email = $_SESSION['email'];
         $name = $_SESSION['name'];
         $phone = $_SESSION['phone'];
      } else {
         header("Location: Login.php");
         exit();
   }
?>


<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href = "styles/styles.css">
<script src= "js/myScript.js"></script>
</head>
<body>
<h2><em>SkylineSells</em></h2>
<div class="profile">
    <img src="images\user-profile-icon.jpg" alt="User profile" class="profile-icon" onclick="toggleMenu()">
    <div class="dropdown-menu" id="dropdownMenu">
    <a href ="Profile.php">Profile</a>
    <a herf ="Setting.php">Setting</a>
    <a href="logout.php">Logout</a>
    </div>
</div>    
<nav>
      <img class="logo" src="images\apartmentlogo.png" alt="Apaetment" LOGO>

<ul class= "menu">

<li> <a href = "Home.php"> Home </a> </li>
<li> <a href = "readPropertyList.php"> Property List </a> </li>
<li> <a href = "Service.php"> Service </a> </li>
<li> <a href = "About.php"> About </a> </li>
<li> <a href = "reviews.php">View Review </a> </li>
<li> <a href = "maincomment.php"> FAQ </a> </li>

</ul>

</nav>
<br>
<h2>Post your advertisement</h2>
  <div class="container">
    <div class="form-box"> 
<form method="post" action="postinsert.php">
    
        <p><b>Contact Information</b></p>
        <br>
        <div class="field-input"><p>Full name</p>
        <input type ="text" name="cname" value="<?php echo $name; ?>" >
        </div> 
        <br><br>
        <div class="field-input"><p>Email</p> 
        <input type ="email" name="cemail" value="<?php echo $email; ?>">
        </div>
        <br><br>
        <div class="field-input"><p>Telephone Number</p>  
        <input type ="tel" name="ctel">
        </div> 
        <br><br>
        <div class="field-input" ><p>Mobile Number</p> 
        <input type ="tel" name="cmob" value="<?php echo $phone; ?>">
        </div>

    
   
   <br><br><br>
   
   
    <hr>
    <br><br>
        <p><b>Property Details</b></p>
        <br>
         
        <div class="field-input"><p>Title of the ad</p>
        <input type ="text" name="ctitle" >
        </div>  
        <br><br>
        <div class="field-input"><p>Location</p> 
        <input type ="text" name="clocation">
        </div>
        <br><br>
        <div class="field-input"><p>Bedrooms</p>
        <input type ="number" name="cbedrooms">
        </div>
        <br><br>
        <div class="field-input"><p>Bathrooms</p> 
        <input type ="number" name="cbathrooms">
        </div>
        <br><br>
        <div class="field-input"><p>Price</p> 
        <input type ="text" name="cprice">
        </div>
        <br><br>
        <div class="field-input"><p>Description</p> 
        <input type ="text"name="cdescription">
        </div>

        <br><br>   

        <div class = "updatebtn">

        <div class="field-input">
        <input class="btn" type="submit" name='btn' value="Submit">
        
        <input class="btn" type ="reset" name='btn' value="Reset">
        </div>

</div>
</div>
</div>
   </form>
   <br>
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