<?php
  require 'config.php';
  

$sql3="UPDATE advertisement
set Client ID='$clientID',
Name='$clientName',
Email='$clientEmail',
Tel Number='$clientTelNo',
Mob Number='$clientMobNo',
Title of the Ad='$clientTitleOfTheAd',
Location='$clientLocation',
No of Bedrooms='$clientNoOfBedrooms',
No of Bathrooms='$clientNoOfBathrooms',
Price='$clientPrice',
Description='$clientDescription' 
WHERE Client ID='$clientID'
FROM advertisement01";


if($con->query($sql3))
{
    echo "Updated";
}
else
{
    echo "Not Updated";
}

?>