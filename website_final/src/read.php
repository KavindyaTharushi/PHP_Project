<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="js/script.js"></script>
    <script src="js/myScript.js"></script>
</head>
<body>
<?php
require 'config.php';

$sql="SELECT ID,Rev_title,Rev_text,Rating FROM review1";

$result=$con->query($sql);

if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo "<div class='box'>
        <div class='rate'>
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
        <i class='bx bx-star'></i>
        </div>";
        "</br>";
        echo "<h3>".$row["Rev_title"]."</h3>"."<br><br> ".$row["Rev_text"]."<br><br>Rating  :<i class='bx bxs-star'></i>"." ".$row["Rating"]."<br>";
        
        echo "<br><button class='button_style'><a href='upadatepage.php?id=".$row["ID"]."' class='button'>Edit</button></a>";


        
        echo "<form class ='form1' method='post' action='delete.php'>
    <input type='hidden' name='ID' value='".$row["ID"]."'>
    <button class='button_style' type='submit' name='revdelete'>Delete</button>
</form>
</div>";
    }
    
}
else{
    echo "No result";
}

$con->close();

?>
    
</body>
</html>


