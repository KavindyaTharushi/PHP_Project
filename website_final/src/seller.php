<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href = "style/styles.css">
<script src= "js/myScript.js"></script>
<link rel="stylesheet" href="styles/styles2.css">
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

<div class="container">
<div class="form-box"> 

<?php

 
echo "<br><br> <a href='postindex.php?id=' class='button'><h1>Add Your Post</h1></a>";

echo "<br><br> <a href='postread.php?id=' class='button'><h1>View Your Post</h1></a>";

?>
</div>
</div>
<?php
require "footer.php";
?>


