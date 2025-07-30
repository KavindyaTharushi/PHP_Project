<?php
    global $user_id;
    session_start();

    if(isset($_SESSION["user_id"])) {
      $user_id = $_SESSION["user_id"];
    } else {
      header("Location: Login.php");
      exit();
    }


?>


<!DoCTYPE html>
<html>
    <head>
        <title>Add review</title>
        <link rel="stylesheet" href="styles/style.css">
        <script src="js/script.js"></script>
        <script src="js/myScript.js"></script>
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
    
    <form class="form2" method="post" action="insert.php">
        <h2>Rate and Review</h2>
        <div class="field_input">
        <b>User ID:</b><br>
        <input type="text" id="u_ID" name="u_ID" required value="<?php echo $user_id; ?>" readonly><br>
        <br><br>
        </div>
        <div class="field_input">
        <b>Review title:</b> <br>
        <input type="text" placeholder="Title" id="title" name="title" required><br>
        <br><br>
        </div>
        <div class="field_input">
        <b>Your review:</b><br>
        <textarea rows="9" cols="60" id="rev" name="rev" required></textarea><br>
        <br>
        </div>
        <b>Ratings :</b>
        <select id="rating" name="rating" class="star" required>
         <option value="1">1</option>
         <option value="2">2</option>
         <option value="3">3</option>
         <option value="4">4</option>
         <option value="5">5</option>
        </select>
        <br><br>
        <input type="checkbox" id="checkbox" onclick="enableButton()"><b>Tick the box to confirm your review</b><br>
        <br>
        <div class="field_input">
        <input class="btn"type="submit" value="Submit" disabled id="submitBtn">
        </div>
        <div class="field_input">
        <input class="btn" type= "Reset">
        </div>
    </form>
    <?php
    require "footer.php";
    ?>
    <script>
      function onSubmit(){
        alert("Form Submitted Succesfully!");
        return true;
      }
    </script>
    </body>
</html>