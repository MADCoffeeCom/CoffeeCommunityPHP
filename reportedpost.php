<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $sql = "SELECT p.postId, p.upVote, p.downVote, p.posterId, t.username, p.postDesc, p.postPicUrl, p.postDate, r.reason FROM reported_post r LEFT JOIN post p ON r.postId=p.postId LEFT JOIN profile t ON t.userId=p.posterId WHERE reportStatus='P'";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['postId'] . " - " . $row['upVote'] . " - " . $row['downVote'] . " - " . $row['posterId'] . " - " . $row['username'] . " - " . $row['postDesc'] . " - " . $row['postPicUrl'] . " - " . $row['postDate'] . " - " . $row['reason'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
