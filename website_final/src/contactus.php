<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href = "styles/styles1.css">
  <script src= "js/myjScript.js"></script>
  <script src="js/myScript.js"></script>
  
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
}

* {
  box-sizing: border-box;
}

/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
  .column, input[type=submit] {
    width: 60%;
    margin-top: 0;
  }
}
</style>
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
            <li> <a href = "About.php"> About </a> </li>
            <li> <a href="Reviews.php">View Reviews</a>
            <li> <a href="maincomment.php">FAQ</a>
            

            </ul>

        </nav>
        <br>
<h2>Contact Us</h2>
<div class="container">

  <div style="text-align:center">
   
   
  </div>
  <div class="row">
    <div class="column">
      <img src="images/img4.jpg" style="width:60%">
    </div>
    <div class="column">
      <form action="/action_page.php">
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">
        <label for="country">Country</label>
        <input type="text" id="country" name="country" placeholder="Your country..">
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
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
 <a href="contact.php" class="footer-details">Contact Us</a>
 <a href="terms&condition.php" class="footer-details">Terms & conditions</a>
 <a href="privacy&policy.php" class="footer-details">Privacy & Policy</a>
 </div>
</body>
</html>
