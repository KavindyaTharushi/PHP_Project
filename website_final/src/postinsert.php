<?php

require 'config.php';


$clientName=$_POST['cname'];
$clientEmail=$_POST['cemail'];
$clientTelNo=$_POST['ctel'];
$clientMobNo=$_POST['cmob'];
$clientTitleOfTheAd=$_POST['ctitle'];
$clientLocation=$_POST['clocation'];
$clientNoOfBedrooms=$_POST['cbedrooms'];
$clientNoOfBathrooms=$_POST['cbathrooms'];
$clientPrice=$_POST['cprice'];
$clientDescription=$_POST['cdescription'];


$sql1="INSERT INTO advertisement VALUES ('','$clientName','$clientEmail','$clientTelNo','$clientMobNo','$clientTitleOfTheAd',
'$clientLocation','$clientNoOfBedrooms','$clientNoOfBathrooms','$clientPrice','$clientDescription')";

if($con->query($sql1))
{
    echo "<script>alert('Insert Successfully')</script>";
    header("location:./seller.php");
}
else
{
    echo "<script>alert('Error')</script>";
    header("location:./seller.php");
}

 $con->close();

?>