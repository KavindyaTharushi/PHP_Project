
<?php

require 'config.php';

session_start();

if(isset($_POST["profiledelete"]))
  {
	  global $con;
	  global $userId;
	  
	 $userId = $_SESSION["user_id"];
	 $sql = "DELETE FROM profile WHERE user_id='$userId'";
	 
	  if ($con->query($sql)) {

		session_unset();
	 
		session_destroy();
	
		echo "<script>alert('User Remove successfully'); window.location.href = 'login.php';</script>";
		exit();

	  } else {
	        echo "Error deleteing profile: " . $con->error;
	  }
	
   }
   
   else
   {
	   echo "Error deleting profile: " . $con->error;
	   
   }

   $con->close();

  ?>