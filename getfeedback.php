<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $sql = "SELECT f.feedbackId, f.ratings, f.feedbackDesc, f.userId, p.username FROM `feedback` f LEFT JOIN profile p ON f.userId = p.userId";
        
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['feedbackId'] . " - " . $row['ratings'] . " - " . $row['feedbackDesc'] . " - " . $row['userId'] . " - " . $row['username'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
