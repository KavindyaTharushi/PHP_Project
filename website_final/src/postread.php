<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles/styles.css">
    <script src="js/myScript.js"></script>
    <link rel="stylesheet" href="styles/styles2.css">

</head>
<body>
    <h2><em>SkylineSells</em></h2>
    <div class="profile">
        <img src="images/user-profile-icon.jpg" alt="User profile" class="profile-icon" onclick="toggleMenu()">
        <div class="dropdown-menu" id="dropdownMenu">
            <a href="Profile.php">Profile</a>
            <a href="Setting.php">Setting</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>    
    <nav>
        <img class="logo" src="images/apartmentlogo.png" alt="Apartment" LOGO>

        <ul class="menu">
            <li><a href="Home.php">Home</a></li>
            <li><a href="readPropertyList.php">Property List</a></li>
            <li><a href="Service.php">Service</a></li>
            <li><a href="aboutus.php">About</a></li>
            <li> <a href = "reviews.php">View Review </a> </li>
            <li> <a href = "maincomment.php"> FAQ </a> </li>

        </ul>
    </nav>
    <br>

    <?php
    require 'config.php';

    echo '<div class="container" style="width:90%; height: 20px; background-color: #ffffffd3; padding:20px;border-radius:10px; box-shadow: 0 4px rgba(0,0,0,0.1);margin: 20 px auto;margin-left:37px;">';
    


    $sql2 = "SELECT * FROM advertisement";
    $result = $con->query($sql2);

    if ($result->num_rows > 0) { 
        
        echo "<table border=2 width='5000px'>";
        echo "<tr>";
        echo "<th>Client ID</th>";
        echo "<th>Name</th>";
        echo "<th>Email</th>";
        echo "<th>Tel Number</th>";
        echo "<th>Mob Number</th>";
        echo "<th>Title of the Ad</th>";
        echo "<th>Location</th>";
        echo "<th>No of Bedrooms</th>";
        echo "<th>No of Bathrooms</th>";
        echo "<th>Price</th>";
        echo "<th>Description</th>";
        echo "<th>Options</th>";
        echo "</tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($row['Client ID']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Name']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Email']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Tel Number']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Mob Number']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Title of the Ad']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Location']) . "</td>";
            echo "<td>" . htmlspecialchars($row['No of Bedrooms']) . "</td>";
            echo "<td>" . htmlspecialchars($row['No of Bathrooms']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Price']) . "</td>";
            echo "<td>" . htmlspecialchars($row['Description']) . "</td>";
            echo "<td><a href='postupdate.php?id=" . $row['Client ID'] . "' class='button'>Edit</a><br><br>";
            echo "<a href='postdelete.php?id=" . $row['Client ID'] . "' class='button'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
        
    } else {
        echo "No Results";
    }

    echo "</div>";

    $con->close();
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
