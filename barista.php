<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $sql = "SELECT * FROM barista b LEFT JOIN profile p ON p.baristaId = b.baristaId WHERE b.`status` = 1";
        
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['baristaId'] . " - " . $row['userPicUrl'] . " - " . $row['username'] . " - " . $row['baristaDesc'] . " - " . $row['userStreetNo'] . " - ". $row['userPostalCode'] . " - ". $row['userState'] . " - ". $row['userTaman'] . " - " . $row['userLocation'] . " - " . $row['userId'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
