<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href = "styles/styles.css">
<title>register page </title>

<script src="js/myScript.js"></script>

</head>


<body>

<script>
 function previewProfilePicture(event) {
    const file = event.target.files[0];
    if (file) {
        const reader = new FileReader();
        reader.onload = function(e) {
            const preview = document.getElementById('profile-picture-preview');
            preview.innerHTML = ''; 
            const img = document.createElement('img');
            img.src = e.target.result;
            img.alt = 'Profile Picture';
            img.style.width = '120px'; 
            img.style.height = '120px';
            img.style.border = '2px solid #6502c7';
            img.style.boxShadow = '0 0 10px rgba(0, 0, 0, 0.8)';
            img.style.objectFit = 'cover'; 
            img.style.borderRadius = '50%'; 
            img.style.display = 'block'; 
            img.style.margin = '0 auto 20px'; 
            preview.appendChild(img);
        }
        reader.readAsDataURL(file);
    }


}

</script>


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
<form method="post" onsubmit='return checkpassword()' enctype="multipart/form-data" action="userRegister.php">
<center><h1>Sign Up</h1></center>



<div class="field-input"><b>First Name</b>
<input type="text" placeholder="First Name" name="F_name" required >
</div>

<div class="field-input"><b> Last Name</b>
<input type="text" placeholder="Last Name" name="L_name" required>
</div>

<div class="field-input">
<b>Email</b><input type="Email" placeholder="Email:abc@gmail.com" name="p_email" required>
</div>
<div class="field-input">
    <b>Phone number</b>
    <input type="tel" placeholder="Phone number: xxx xxxxxxx" required title="number should have 10 digits" pattern="[0-9]{10}" name="pnumber">
</div>
<div class="field-input">
<b>User Name</b><input type="text" placeholder="Username:" name="user_id" required>
</div>

<div class="field-input">
    <b>Password</b>
    <input type="password" placeholder="Password" id="pwd1" name="pwd" required 
           pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}" 
           title="Password must contain at least one uppercase and one lowercase letter,one number, and at least 6 or more characters">
</div>
<div class="field-input">
<b>Re-enter password</b><input type="password" placeholder="Re-enter your Password" id="pwd2" required>
</div>


   <!-- <b class="pro-lable">Profile Picture</b><br> -->
   <div class="profile-picture" id="profile-picture-preview"></div>
   <input  type="file" name="profile_picture" id="profile-picture-input" accept="image/*" onchange="previewProfilePicture(event)">
   <label for="profile-picture-input"  >Upload Picture</label>

<div class="field-input">
<input class = "btn" type="submit" value = "Sign Up">
</div>

<div class="field-input">
<p><b>Already have an account ? <a href="Login.php">login<a> </b></p>
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