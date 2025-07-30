<?php
require 'config.php';

if(isset($_GET['id'])) {
    $ID = $_GET['id'];

    $sql = "SELECT ID, Rev_title, Rev_text, Rating FROM review1 WHERE ID='$ID'";
    $result = $con->query($sql);

    if($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $rev_title = $row['Rev_title'];
        $rev_text = $row['Rev_text'];
        $rating = $row['Rating'];
    } else {
        echo "Review not found.";
        exit();
    }
} else {
    echo "Invalid request.";
    exit();
}
if(isset($_POST['update'])) {
    $ID = $_POST['ID'];
    $rev_title = $_POST['Rev_title'];
    $rev_text = $_POST['Rev_text'];
    $rating = $_POST['Rating'];

    $sql = "UPDATE review1 SET Rev_title='$rev_title', Rev_text='$rev_text', Rating='$rating' WHERE ID='$ID'";
    if($con->query($sql) === TRUE) {
        header("Location: reviews.php");
        echo "Review updated successfully.";
    } else {
        echo "Error updating review: " . $con->error;
    }
    
}

$con->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Review</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="js/myScript.js"></script>
</head>
<body>
    <?php
       require "header.php";
    ?>
    <form class="form2" method="post" action="">
        <h2>Edit Review</h2>
        <input type="hidden" name="ID" value="<?php echo $ID; ?>">
        <label for="Rev_title">Review Title:</label><br>
        <div class="field_input">
        <input type="text" id="Rev_title" name="Rev_title" value="<?php echo $rev_title; ?>"><br><br>
        </div>
        <label for="Rev_text">Review Text:</label><br>
        <div class="field_input">
        <textarea rows="9" cols="60"  class=textarea id="Rev_text" name="Rev_text"><?php echo $rev_text; ?></textarea><br><br>
        </div>
        <label for="Rating">Rating:</label><br>
        <div class="field_input1">
        <input type="number" id="Rating" name="Rating" min="1" max="5" value="<?php echo $rating; ?>"><br><br>
        </div>
        <button class="btnup" type="submit" name="update">Update Review</button>
    
    </form>
    <?php
       require "footer.php";
    ?>
</body>
</html>
