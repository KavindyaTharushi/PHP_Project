<?php

require 'config.php';

readData();

function readData()
{
    global $user_id;
    session_start();

    if(isset($_SESSION["user_id"])) {
      $user_id = $_SESSION["user_id"];
    } else {
      header("Location: Login.php");
      exit();
    }

    global $con;
    global $firstname;
    global $lastname;
    global $email;
    global $phone_no;
    global $username;
    global $profile_picture;
    
    $sql = "SELECT First_name, Last_name, Email, phone_number, user_name, profile_picture FROM profile WHERE user_id = '$user_id'";
    $result = $con->query($sql); 
    
    while ($row = $result->fetch_assoc()) {
        $firstname = $row['First_name'];
        $lastname = $row['Last_name'];
        $email = $row['Email'];
        $phone_no = $row['phone_number'];
        $username = $row['user_name'];
        $profile_picture = $row['profile_picture'];
        
        
    }
}

?>


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

<!DOCTYPE html>
<html>

<head>

<link rel="stylesheet" href = "styles/styles.css">
<title>Profile pages </title>

<script src="js/myScript.js"></script>

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
  <button class="button1"><a href="seller.php">Post Your Ad</a></button>
<ul class= "menu">

<li> <a href = "Home.php"> Home </a> </li>
<li> <a href = "readPropertyList.php"> Property List </a> </li>
<li> <a href = "Service.php"> Service </a> </li>
<li> <a href = "aboutus.php"> About </a> </li>
<li> <a href="Reviews.php">View Reviews</a>
<li> <a href="maincomment.php">FAQ</a>


</ul>

</nav>

<div class="container">
    <div class="form-box">
      
        <form method="post" action="Editprofile.php?user_id=<?php echo $user_id; ?>" enctype="multipart/form-data">
            <center><h1>My Profile</h1></center>

            <div class="profile-picture" id="profile-picture-preview">
            <?php if(!empty($profile_picture)): ?>
                <img src="<?php echo $profile_picture; ?>" alt="Profile Picture" style="width: 120px; height: 120px; border: 2px solid #6502c7; border-radius: 50%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.8); object-fit: cover; display: block; margin: 0 auto 20px;">
            <?php endif; ?>
            </div>
            <input type="file" name="profile_picture" id="profile-picture-input" accept="image/*" onchange="previewProfilePicture(event)">
            <label for="profile-picture-input">Upload Picture</label>
            <div class="field-input"><b>First Name</b>
                <input type="text" name="first_name" value="<?php echo $firstname; ?>" required>
            </div>

            <div class="field-input"><b>Last Name</b>
                <input type="text" name="last_name"  value="<?php echo $lastname; ?>" required>
            </div>

            <div class="field-input">
                <b>Email</b><input type="Email" name="email" readonly  value="<?php echo $email; ?>">
            </div>
            <div class="field-input">
                <b>Phone number</b>
                <input type="tel" name="number" required title="number should have 10 digits" pattern="[0-9]{9}" value="<?php echo $phone_no; ?>">
            </div>
            <div class="field-input">
                <b>User Name</b><input type="text" name="username" required  value="<?php echo $username; ?>">
            </div>

            <div class = "updatebtn">
            
            <div class="field-input">
                <input class="btn" type="submit" value="Update">
            </div>


            </div>  
        </form>
        <form method="post" action ="profiledelete.php" >
              <button type="submit" class="delete" name ="profiledelete"  onsubmit='return checkConfirmation()'>Delete</button>

        </form>     
            </div>
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

