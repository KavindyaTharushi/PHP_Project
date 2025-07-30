<?php
  require 'config.php';

  
  $revtitle=$_POST['title'];
  $revbody=$_POST['rev'];
  $revrate=$_POST['rating'];

  $sql="INSERT INTO review1 VALUES ('','$revtitle','$revbody','$revrate')";

  if($con->query($sql))
  {
    echo "<script>alert('Deleted')</script>";
  }
  else{
    echo "error".$con->error;
  }
  $con->close();
  header("Location: reviews.php");

?>