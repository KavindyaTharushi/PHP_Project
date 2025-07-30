<?php

require 'config.php';


//$kid=$_POST["sid"];
$kapartment_name=$_POST["sapartment_name"];
$kfirst_name=$_POST["sfirst_name"];
$klast_name=$_POST["slast_name"];
$kphone_number=$_POST["sphone_number"];
$kemail=$_POST["semail"];
$Kbooking_date=$_POST["sbooking_date"];

$sql="INSERT INTO apartment3 VALUES('','$kapartment_name','$kfirst_name','$klast_name','$kphone_number','$kemail',
	'$Kbooking_date')";



if($con->query($sql))
{
    
    echo "<script>alert('Booking record inserted successfully.');</script>";
        echo "<script>window.location.href = 'bookingread.php';</script>";
        exit();
}
else
{
	echo"error".$con->error;
}



?>

