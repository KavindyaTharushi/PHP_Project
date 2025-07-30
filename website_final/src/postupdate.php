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
<li> <a href = "PropertyList.php"> Property List </a> </li>
<li> <a href = "Service.php"> Service </a> </li>
<li> <a href = "About.php"> About </a> </li>
<li> <a href = "reviews.php">View Review </a> </li>
<li> <a href = "maincomment.php"> FAQ </a> </li>

</ul>

</nav>
<br>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
require 'config.php';
if(isset($_GET["id"])) {
    $id = $_GET["id"];

    $sql = "SELECT * FROM advertisement WHERE `Client ID`=$id";
    $result = $con->query($sql);



        if($result->num_rows>0){
            while($row = $result->fetch_assoc())
        { 
            $name=$row["Name"];
            $clientEmail=$row["Email"];
            $clientTelNo=$row["Tel Number"];
            $clientMobNo=$row["Mob Number"];
            $clientTitleOfTheAd=$row["Title of the Ad"];
            $clientLocation=$row["Location"];
            $clientNoOfBedrooms=$row["No of Bedrooms"];
            $clientNoOfBathrooms=$row["No of Bathrooms"];
            $clientPrice=$row["Price"];
            $clientDescription=$row["Description"];
        }
        
  
       
     

?>
    <div class="container">
    <div class="form-box">
<form method="post" action="">

<p><b>Contact Information</b></p>

<br><br>


            <div class="field-input"><p>Full Name</p>
                <input type="text"  name="cname" value="<?php echo $name; ?>">
            </div>

            <br>


            <div class="field-input"><p>Email</p>
                <input type="text" name="cemail"  value="<?php echo $clientEmail; ?>" >
            </div>

            <br>

            
            <div class="field-input"><p>Telephone Number</p>
                 <input type="tel" name="ctel" required title="number should have 10 digits" value="<?php echo $clientTelNo; ?>">
            </div>

            <br>

            <div class="field-input"><p>Mobile Number</p>
                <input type="tel" name="cmob" required title="number should have 10 digits"  value="<?php echo $clientMobNo; ?>">
            </div>

            <br>

            <hr>

            <br>
            
            <p><b>Property Details</b></p>

            <br><br>

            <div class="field-input"><p>Title of the ad</p>
                <input type="text" name="ctitle"  value="<?php echo $clientTitleOfTheAd; ?>" >
            </div>

            <br>

            <div class="field-input"><p>Location</p>
                <input type="text" name="clocation"  value="<?php echo $clientLocation; ?>" >
            </div>

            <br>

            <div class="field-input"><p>Bedrooms</p>
                <input type="text" name="cbedrooms"  value="<?php echo $clientNoOfBedrooms; ?>" >
            </div>

            <br>

            <div class="field-input"><p>Bathrooms</p>
                <input type="text" name="cbathrooms"  value="<?php echo $clientNoOfBathrooms; ?>" >
            </div>

            <br>

            <div class="field-input"><p>Price</p>
                <input type="text" name="cprice"  value="<?php echo $clientPrice; ?>" >
            </div>

            <br>

            <div class="field-input"><p>Description</p>
                <input type="text" name="cdescription"  value="<?php echo $clientDescription; ?>" >
            </div>

            

            

            <div class = "updatebtn">
            
            <div class="field-input">
                <input class="btn" type="submit" name='btn' value="Update">
            </div>

            

            </div>
    </div>
    </div>
</form>
<?php
} 
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

<?php 
    if(isset($_POST['btn'])){
        $name=$_POST['cname'];
        $$clientEmail=$_POST['cemail'];
        $clientTelNo=$_POST['ctel'];
        $clientMobNo=$_POST['cmob'];
        $clientTitleOfTheAd=$_POST['ctitle'];
        $clientLocation=$_POST['clocation'];
        $clientNoOfBedrooms=$_POST['cbedrooms'];
        $clientNoOfBathrooms=$_POST['cbathrooms'];
        $clientPrice=$_POST['cprice'];
        $clientDescription=$_POST['cdescription'];

$sql="UPDATE advertisement SET Name ='$name', Email='$clientEmail', `Tel Number`='$clientTelNo', `Mob Number`='$clientMobNo', `Title of the Ad`='$clientTitleOfTheAd', Location='$clientLocation', `No of Bedrooms`='$clientNoOfBedrooms', `No of Bathrooms`='$clientNoOfBathrooms', `Price`='$clientPrice', `Description` ='$clientDescription' WHERE `Client ID`='$id' ";
       
 if($con->query($sql)) {
     echo "Updated";
     header("location:./postread.php");
 }else {
     echo "Not Updated";
 }
    }
}
?>

<?php 


?>
