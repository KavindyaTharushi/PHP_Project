<html>
    <head>
        <link rel="stylesheet" href = "styles/styles1.css">
        <script src= "js/myjScript.js"></script>
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
          
            <ul class= "menu">

            <li> <a href = "Home.php"> Home </a> </li>
            <li> <a href = "readPropertyList.php"> Property List </a> </li>
            <li> <a href = "Service.php"> Service </a> </li>
            <li> <a href = "About.php"> About </a> </li>
            <li> <a href="Reviews.php">view Reviews</a>
            <li> <a href="maincomment.php">FAQ</a>
            

            </ul>

        </nav>


        <div class="container" style="width: 50%; height: 100px; background-color: #ffffffd3; padding: 20px; border-radius: 10px; box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1); margin: 20px auto;">
        <table border='1'>

        

            <?php

            require 'config.php';

            $sql1 = "SELECT id, apartment_name, first_name, last_name, phone_number, email, booking_date FROM apartment3";
            $result = $con->query($sql1);

            if ($result->num_rows > 0) {
                echo "<table border='1'>";
                echo "<tr>
                        <th>ID</th>
                        <th>Apartment Name</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Phone Number</th>
                        <th>Email</th>
                        <th>Booking Date</th>
                        <th>Action</th> 
                      </tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>".$row["id"]."</td>";
                    echo "<td>".$row["apartment_name"]."</td>";
                    echo "<td>".$row["first_name"]."</td>";
                    echo "<td>".$row["last_name"]."</td>";
                    echo "<td>".$row["phone_number"]."</td>";
                    echo "<td>".$row["email"]."</td>";
                    echo "<td>".$row["booking_date"]."</td>";
                    echo "<td><a href='bookingupdateindex.php?id=".$row["id"]."'>Update</a></td>"; // Link to update page with ID parameter
                    echo "<td><a href='bookingdeleteindex.php?id=".$row["id"]."'>Reservation Cancellation</a></td>";
                    echo "</tr>";
                }

                echo "</table>";
            } else {
                echo "no result";
            }

            $con->close();
            ?>
        </table>
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
