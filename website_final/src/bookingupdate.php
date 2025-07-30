<?php

 require 'config.php';


$Id=$_POST["sid"];
$Apartment_name=$_POST["sapartment_name"];
$First_name=$_POST["sfirst_name"];
$Last_name_name=$_POST["slast_name"];
$Phone_number=$_POST["sphone_number"];
$email=$_POST["semail"];
$Booking_date=$_POST["sbooking_date"];

if(empty($Id)||empty($Apartment_name)||empty($First_name)||empty($Last_name)||empty($Phone_number)||empty($email)||empty($Booking_date))
{

    echo"all required";

}
else
{

    $sql2= "UPDATE apartment3 set apartment_name='$Apartment_name',first_name='$First_name',last_name='$Last_name',phone_number='$Phone_number',email='$email',booking_date='$Booking_date' WHERE id='$Id'";


        if($con->query($sql2))
        {
        	echo"updated";
        	 header("Location: bookingread.php");
            exit();
        }
        else
        {
        	echo"not updated";
        }


}






?>