<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $sql = "SELECT profile.userId, profile.userPicUrl, profile.username, profile.email, profile.userStreetNo, profile.userTaman, profile.userPostalCode, profile.userState, wallet.walletId, wallet.walletBalance, wallet.walletPin FROM profile LEFT JOIN wallet ON profile.userId=wallet.userId";
        
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['userId'] . " - " . $row['userPicUrl'] . " - " . $row['username'] . " - " . $row['email'] . " - " . $row['userStreetNo'] . " - " . $row['userTaman'] . " - " . $row['userPostalCode'] . " - " . $row['userState'] . " - " . $row['walletId'] . " - " . $row['walletBalance'] . " - " . $row['walletPin'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
