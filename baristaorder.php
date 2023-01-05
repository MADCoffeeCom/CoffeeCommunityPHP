<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $baristaid = $db->prepareData($_POST['baristaId']);
    $sql = "SELECT * FROM `order` WHERE baristaId = '" . $baristaid . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['orderId'] . " - " . $row['baristaId'] . " - " . $row['userId'] . " - " . $row['orderStartTime'] . " - " . $row['orderEndTime'] . " - " . $row['orderDuration'] . " - " . $row['orderTotalPrice'] . " - " . $row['orderStatus'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
