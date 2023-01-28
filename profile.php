<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $userId = $db->prepareData($_POST['userId']);
    $sql = "SELECT profile.userId, profile.baristaId, profile.adminId, profile.userPicUrl, profile.username, profile.email, profile.userStreetNo, profile.userTaman, profile.userPostalCode, profile.userState FROM profile WHERE userId='" . $userId . "'";
        
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['userId'] . " - " . $row['userPicUrl'] . " - " . $row['baristaId'] . " - " . $row['adminId'] . " - " . $row['username'] . " - " . $row['email'] . " - " . $row['userStreetNo'] . " - " . $row['userTaman'] . " - " . $row['userPostalCode'] . " - " . $row['userState'];
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
