<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $baristaId = $db->prepareData($_POST['baristaId']);
    $sql = "SELECT o.orderId, o.baristaId, b.baristaDesc, o.userID AS customerID, p.username AS customerName, p.userTaman AS customerLocation, o.orderStartTime, o.orderEndTime, o.orderDuration, o.orderTotalPrice, o.orderStatus FROM `order` o LEFT JOIN profile p ON o.userId = p.userId LEFT JOIN barista b ON b.baristaId = o.baristaId WHERE o.baristaId = '" . $baristaId . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['orderId'] . " - " . $row['baristaId'] . " - " . $row['baristaDesc'] . " - " . $row['customerID'] . " - " . $row['customerName'] . " - " . $row['customerLocation'] . " - " . $row['orderStartTime'] . " - " . $row['orderEndTime'] . " - " . $row['orderDuration'] . " - " . $row['orderTotalPrice'] . " - " . $row['orderStatus'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
