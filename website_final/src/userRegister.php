<?php

require 'config.php';

register();

function register()
{
    global $con;
    global $destination;

    
    if (isset($_FILES['profile_picture']) && $_FILES['profile_picture']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['profile_picture']['name'];
        $file_tmp = $_FILES['profile_picture']['tmp_name'];

        $upload_directory = 'images/user_profiles';
        $destination = $upload_directory . $file_name;
        if (!move_uploaded_file($file_tmp, $destination)) {
            echo "Error: Failed to move uploaded file to destination folder";
            return;
        }
    } else {
        $destination = '';
    }

    $first_name = $_POST["F_name"];
    $last_name = $_POST["L_name"];
    $email = $_POST["p_email"];
    $phone_number = $_POST["pnumber"];
    $user_name = $_POST["user_id"];
    $password = $_POST["pwd"];

    
    $query = "SELECT * FROM profile WHERE Email = '$email'";
    $result = $con->query($query);
    
    if ($result->num_rows > 0) {
        echo "Error: This email is already associated with an account";
        return;
    }

    // Hash the password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

 
    $sql = "INSERT INTO profile (First_name, Last_name, Email, phone_number, user_name, password, profile_picture) 
            VALUES ('$first_name', '$last_name', '$email', '$phone_number', '$user_name', '$hashed_password', '$destination')";

    if ($con->query($sql)) {
        
        echo "<script>alert('User register  successfully'); window.location.href = 'login.php';</script>";
        exit(); 
    } else {
        echo "Error: " . $con->error;
    }

    $con->close();
}



?>
