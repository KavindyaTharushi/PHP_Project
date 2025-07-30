


<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href = "styles/styles.css">
<title>Login page </title>

<script src="js/myScript.js"></script>

</head>


<body>

<h2><em>SkylineSells</em></h2>

<nav>

  <img class="logo" src="images\apartmentlogo.png" alt="Apartment LOGO">
  
<ul class= "menu">

<li> <a href = "Home.php"> Home </a> </li>
<li> <a href = "readPropertyList.php"> Property List </a> </li>
<li> <a href = "Service.php"> Service </a> </li>
<li> <a href = "aboutus.php"> About </a> </li>

</ul>

</nav>
<div class="container">
<div class="form-box">
<form method="post" action="userLogin.php"  >
<center><h1>Log In</h1></center>

<div class="field-input">
Email:<input type="text" name="p_email" placeholder="email" required>
</div>

<div class="field-input">
Password:<input type="password" name="pwd" placeholder="Password" id="pwd1" required>
</div>

<input type="checkbox">Remember me<br>
 
  <a href="forgotpassword.html">Forgot my password</a>

<div class="field-input">
<input class = "btn" type="submit" value = "Log In">
</div>

<div class="field-input">
<p><b>Still don't have an account ? <a href="register.php">Register<a> </b></p>
</div>

</form>
</div>
</div> 
 
<hr>
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
<hr>
</body>


</html>