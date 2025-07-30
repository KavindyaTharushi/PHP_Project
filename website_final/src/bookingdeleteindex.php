<?php

require 'config.php';

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete'])) {
    // Check if ID parameter is set in the POST data
    if(isset($_POST['id'])) {
        $id = $_POST['id'];
        
        // Delete the booking record
        $delete_sql = "DELETE FROM apartment3 WHERE id=$id";
        
        if ($con->query($delete_sql) === TRUE) {
            // Display a pop-up message
            echo "<script>alert('Booking record cancelled successfully.');</script>";
            // Redirect to index.php after the pop-up is dismissed
            echo "<script>window.location.href = 'bookingread.php';</script>";
            exit();
        } else {
            echo "Error deleting record: " . $con->error;
        }
    } else {
        echo "ID parameter missing.";
    }
}

// Fetch all booking records
$sql = "SELECT id, apartment_name, first_name, last_name, phone_number, email, booking_date FROM apartment3";
$result = $con->query($sql);

?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href = "styles/styles1.css">
        <script src= "js/myjScript.js"></script>
        <script src="js/myScript.js"></script>
        <title>Cancel Booking Record</title>
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
                <li> <a href="Reviews.php">view Reviews</a>
                <li> <a href="maincomment.php">FAQ</a>
                <li> <input type="php" value="Post your Ad"> </li>

            </ul>

        </nav>
        <br>
        <h2>Cancel Booking Record</h2>
        <div class="container">
           
            <div class="form-box">
                <form method="post">
                    <label for="booking">Select booking to cancel:</label>
                    <select name="id" id="booking">
                        <?php 
                        // Display options for each booking record
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                                echo "<option value='".$row['id']."'>".$row['apartment_name']." - ".$row['first_name']." ".$row['last_name']."</option>";
                            }
                        } else {
                            echo "<option value='' disabled>No bookings found</option>";
                        }
                        ?>
                    </select>
                    <br>
                    <br>
                    <input type="submit" name="delete" value="Cancel">
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

<?php
$con->close();
?>
