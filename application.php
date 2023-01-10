<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $sql = "SELECT a.applicationId, a.userId, p.userPicUrl, p.username, a.userBackground, a.yearsOfExperience, a.applicationStatus FROM application a LEFT JOIN profile p ON a.userId = p.userId WHERE applicationStatus = 'P'";    

    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['applicationId'] . " - " . $row['userId'] . " - " . $row['userPicUrl'] . " - " . $row['username'] . " - " . $row['userBackground'] . " - " . $row['yearsOfExperience'] . " - " . $row['applicationStatus'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
