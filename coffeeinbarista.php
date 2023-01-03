<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $userid = $db->prepareData($_POST['userId']);
    $sql = "SELECT c.coffeeId, c.coffeePicUrl, c.coffeeTitle, c.coffeeDesc, c.coffeePrice FROM coffee c WHERE c.baristaId = '" . $userid . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['userId'] . " - " . $row['userPicUrl'] . " - " . $row['username'] . " - " . $row['email'] . " - " . $row['userStreetNo'] . " - " . $row['userTaman'] . " - " . $row['userPostalCode'] . " - " . $row['userState'] . " - " . $row['walletId'] . " - " . $row['walletBalance'] . " - " . $row['walletPin'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
