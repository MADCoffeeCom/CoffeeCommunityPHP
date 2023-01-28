<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $sql = "SELECT p.postId, p.posterId, a.username , p.upVote, p.downVote, p.postDesc, p.postPicUrl, p.postDate FROM post p LEFT JOIN profile a ON a.userId = p.posterId order BY postDate DESC";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['postId'] . " - " . $row['posterId'] . " - " . $row['username'] . " - " . $row['upVote'] . " - " . $row['downVote'] . " - " . $row['postDesc'] . " - " . $row['postPicUrl'] . " - " . $row['postDate'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
