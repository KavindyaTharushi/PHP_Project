<?php

require 'config.php';

if(isset($_GET["id"]))
{
    $ID=$_GET["id"];

    $sql4 = "DELETE FROM advertisement WHERE `Client ID` = '$ID'";


    if($con->query($sql4))
    {
        echo "<script>alert('Deleted')</script>";
        header("location:./postread.php");
    }
    else
    {
        echo "<script>alert('Error')</script>";
        header("location:./postread.php");
    }
}

$con->close();
   
?>
