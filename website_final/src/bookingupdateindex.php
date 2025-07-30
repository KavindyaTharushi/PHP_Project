<?php

require 'config.php';


if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Fetch the booking record based on the ID
    $sql = "SELECT * FROM apartment3 WHERE id=$id";
    $result = $con->query($sql);
    
    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $apartment_name = $row['apartment_name'];
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $phone_number = $row['phone_number'];
        $email = $row['email'];
        $booking_date = $row['booking_date'];
    } else {
        echo "Booking record not found.";
        exit();
    }
} else {
    echo "ID parameter missing.";
    exit();
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $new_apartment_name = $_POST['apartment_name'];
    $new_first_name = $_POST['first_name'];
    $new_last_name = $_POST['last_name'];
    $new_phone_number = $_POST['phone_number'];
    $new_email = $_POST['email'];
    $new_booking_date = $_POST['booking_date'];
    
    // Update the booking record
    $update_sql = "UPDATE apartment3 SET apartment_name='$new_apartment_name', first_name='$new_first_name', last_name='$new_last_name', phone_number='$new_phone_number', email='$new_email', booking_date='$new_booking_date' WHERE id=$id";
    
    if ($con->query($update_sql) === TRUE) {
        // JavaScript alert for successful update
        echo "<script>alert('Booking record updated successfully.');</script>";
        echo "<script>window.location.href = 'bookingread.php';</script>";
        exit();
    } else {
        echo "Error updating record: " . $con->error;
    }
}

$con->close();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href = "styles/styles1.css">
        <script src= "js/myjScript.js"></script>
        <script src="js/myScript.js"></script>
        <title>Update Booking Record</title>
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
        

        </ul>

        </nav>
        <br>
            <h2>Update Booking Record</h2>
            <div class="container">
                <div class="form-box">
                    <form method="post">
                        Apartment Name: <input type="text" name="apartment_name" value="<?php echo $apartment_name; ?>"><br><br>
                        First Name: <input type="text" name="first_name" value="<?php echo $first_name; ?>"><br><br>
                        Last Name: <input type="text" name="last_name" value="<?php echo $last_name; ?>"><br><br>
                        Phone Number: <input type="text" name="phone_number" value="<?php echo $phone_number; ?>"><br><br>
                        Email: <input type="text" name="email" value="<?php echo $email; ?>"><br><br>
                        Booking Date: <input type="date" name="booking_date" value="<?php echo $booking_date; ?>"><br><br>
                        <input type="submit" value="Update">
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
