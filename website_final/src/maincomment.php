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
    <script src="js/myScript.js"></script>
</head>
<body>

    <?php
    require 'header.php';
    echo "<br>";
    echo "<p>FAQ<br><br></p>";
    echo "<p id='text'>Do You Need Help?</p><br>";
   echo "<form method='POST' action='".setComments($con)."'>
        <input type='hidden' name='uid' value='Anonymous'>
        <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
        <textarea name='message'></textarea><br>
        <button type='submit' name='commentSubmit'>Submit</button>
    </form>";
    getComments($con);
    echo "<br><br><br><br><br><br><br><br><br>";
    require 'footer.php';
    ?>
</body>
</html>