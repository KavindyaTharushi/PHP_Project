<?php

require 'config.php';

login();

function login()
{
    global $con;

    $email = $_POST["p_email"];
    $password = $_POST["pwd"];

    // check user exists
    $query = "SELECT * FROM profile WHERE Email = '$email'";
    $result = $con->query($query);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row["password"])) {
            session_start();
            $_SESSION["user_id"] = $row["user_id"];
            $_SESSION["email"] = $row["Email"];
            $_SESSION["name"] = $row["First_name"];
            $_SESSION["phone"] = $row["phone_number"];
            $_SESSION["last_name"] = $row["Last_name"];


            header("Location: Home.php");
           
        } else {
            echo "Password is incorrect, please try again";
        }
    } else {
        echo "Email does not exist";
    }

    $con->close();
}

?>
