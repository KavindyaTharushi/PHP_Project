<?php
$con=new mysqli('localhost','root','','apartment');

if($con->connect_error)
{
    die("connection faild ".$con->connect_error);
}
?>