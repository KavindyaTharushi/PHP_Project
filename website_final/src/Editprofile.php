 <?php
require 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    updateProfile();
}

function updateProfile()
{
    global $con;

    // get user 
    $user_id =  $_GET['user_id'];
    $sql = "SELECT * FROM profile WHERE user_id = '$user_id'";
    $result = $con->query($sql); 
    $row = $result->fetch_assoc();
    
    // get user input
    $first_name = isset($_POST["first_name"]) ? $_POST["first_name"] : $row['First_name'];
    $last_name = isset($_POST["last_name"]) ? $_POST["last_name"] : $row['Last_name'];
    $email = isset($_POST["email"]) ? $_POST["email"] : $row['Email'];
    $phone_no = isset($_POST["number"]) ? $_POST["number"] : $row['phone_number'];
    $username = isset($_POST["username"]) ? $_POST["username"] : $row['user_name'];

   
    if(isset($_FILES["profile_picture"]) && $_FILES["profile_picture"]["error"] == UPLOAD_ERR_OK) {
        $target_dir = "images/user_profiles";
        $target_file = $target_dir . basename($_FILES["profile_picture"]["name"]);
        move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file);
        $profile_picture = $target_file;
    } else {
        
        $profile_picture = $row['profile_picture'];
    }

    $sql = "UPDATE profile SET First_name='$first_name', Last_name='$last_name', Email='$email', phone_number='$phone_no', user_name='$username', profile_picture='$profile_picture' WHERE user_id='$user_id'";

    if ($con->query($sql)) {
          
		  header("location:profile.php");

    } else {
        echo "Error updating profile: " . $con->error;
    }

    $con->close();
}
?>
