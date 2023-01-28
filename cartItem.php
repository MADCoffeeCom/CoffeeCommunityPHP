<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $userId = $db->prepareData($_POST['userId']);
    $sql = "SELECT p.userId, p.userStreetNo, p.userTaman, p.userPostalCode, p.userState, ci.coffeeId, ci.amount, c.coffeeTitle, c.coffeePicUrl, c.coffeePrice, c.coffeeType, c.baristaId from cart_item ci LEFT JOIN `profile` p on ci.userId = p.userId LEFT JOIN coffee c on ci.coffeeId = c.coffeeId WHERE p.userId = '" . $userId . "';";    
    $result = mysqli_query($db->getConnect(), $sql);

        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
                //It will return the result here, split the string in Java
                echo $row['coffeePicUrl'] . " - " . $row['coffeeTitle'] . " - " . $row['coffeePrice'] . " - " . $row['amount'] . " - " . $row['coffeeType'] . " - " . $row['userStreetNo'] . " - " . $row['userTaman'] . " - " . $row['userPostalCode'] . " - " . $row['userState'] . " - " . $row['baristaId'] . " - " . $row['coffeeId'] . "split";            
            }
        } else{
            echo "No results";
        } 
    } else echo "Error: Database connection";
?>
