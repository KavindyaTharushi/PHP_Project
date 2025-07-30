<?php
  date_default_timezone_set('Asia/Colombo');
  include 'config.php';
  include 'crud.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles/commentstyle.css">
</head>
<body>
    <?php
    require "header.php";
    echo "<br>";
$cid=$_POST['cid'];
$uid=$_POST['uid'];
$date=$_POST['date'];
$message=$_POST['message'];
   echo "<form method='POST' action='".editComments($con)."'>
   <input type='hidden' name='cid' value='".$cid."'>
        <input type='hidden' name='uid' value='".$uid."'>
        <input type='hidden' name='date' value='".$date."'>
        <textarea class='textarea2' name='message'>".$message."</textarea><br>
        <button type='submit' name='commentSubmit'>Edit</button>
    </form>
    <br><br><br><br><br><br><br>";
    require "footer.php";
    ?>
</body>
</html>