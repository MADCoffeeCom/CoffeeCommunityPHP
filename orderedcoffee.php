<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $userId = $db->prepareData($_POST['userId']);
    $sql = "SELECT o.orderId, o.baristaId, p.username AS baristaName, p.userTaman AS baristaTaman, b.baristaDesc, o.userId, o.orderStartTime, o.orderEndTime, o.orderDuration, o.orderTotalPrice, o.orderStatus FROM `order` o LEFT JOIN profile p ON o.baristaId = p.baristaId LEFT JOIN barista b ON o.baristaId = b.baristaId WHERE o.userId = '" . $userId . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['orderId'] . " - " . $row['baristaId'] . " - " . $row['baristaName'] . " - " . $row['baristaTaman'] . " - " . $row['baristaDesc'] . " - " . $row['userId'] . " - " . $row['orderStartTime'] . " - " . $row['orderEndTime'] . " - " . $row['orderDuration'] . " - " . $row['orderTotalPrice'] . " - " . $row['orderStatus'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
