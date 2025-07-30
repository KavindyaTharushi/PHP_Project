<?php

require 'config.php';

if(isset($_POST['revdelete']))
{
    $ID=$_POST['ID'];

    $sql="DELETE FROM review1 WHERE ID='$ID'";

    $result=$con->query($sql);

    if($result===TRUE)
    {
        echo "<script>alert('Review deleted sucessfully');window.location.href='reviews.php';</script>";
    }
    else
    {
        echo "Error deleting record: " . $con->error;
    }
}

$con->close();

?>






