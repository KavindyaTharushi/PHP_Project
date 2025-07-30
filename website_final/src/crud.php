<?php
//Insert 
function setComments($con){
    if(isset($_POST['commentSubmit'])){
        $uid=$_POST['uid'];
        $date=$_POST['date'];
        $message=$_POST['message'];

        $sql="INSERT INTO comments1 (uid, date, message) VALUES('$uid','$date','$message')";
        $result=$con->query($sql);
    }
     
}
//Read
function getComments($con){
    $sql="SELECT * FROM comments1";
    $result=$con->query($sql);
    while($row=$result->fetch_assoc()){
        echo "<div class='comment-box'><p>";
           echo $row['uid']."<br>";
           echo $row['date']."<br>";
           echo nl2br($row['message']);
        echo "</p>
        <form class='delete-form' method='POST' action='".deleteComments($con)."'>
        <input type='hidden' name='cid' value='".$row['cid']."'>
          <button type='submit' name='commentDelete'>Delete</button>
        </form>
           <form class='edit-form' method='POST' action='editcomment.php'>
           <input type='hidden' name='cid' value='".$row['cid']."'>
           <input type='hidden' name='uid' value='".$row['uid']."'>
           <input type='hidden' name='date' value='".$row['date']."'>
           <input type='hidden' name='message' value='".$row['message']."'>
             <button>Edit</button>
           </form>
           
        </div>";
    }
}
//Update
function editComments($con){
    if(isset($_POST['commentSubmit'])){
        $cid=$_POST['cid'];
        $uid=$_POST['uid'];
        $date=$_POST['date'];
        $message=$_POST['message'];

        $sql="UPDATE comments1 SET message ='$message' WHERE cid='$cid'";
        $result=$con->query($sql);
        header("Location:maincomment.php");
    }
}
// Delete
function deleteComments($con){
    if(isset($_POST['commentDelete'])){
        $cid=$_POST['cid'];
        echo $cid;
        $sql="DELETE FROM comments1 WHERE cid='$cid'";
        if ($con->query($sql) === TRUE) {
           
            echo "<script>alert('Comment deleted successfully'); window.location.href = 'maincomment.php';</script>";
            
            
        } else {
            echo "Error deleting record: " . $con->error;
        }
    }
}

?>
</body>
</html>

