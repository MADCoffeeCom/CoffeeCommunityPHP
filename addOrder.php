<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $orderId = $db->prepareData($_POST['orderId']);
    $baristaId = $db->prepareData($_POST['baristaId']);
    $userId = $db->prepareData($_POST['userId']);
    $orderStartTime = $db->prepareData($_POST['orderStartTime']);
    $orderEndTime = $db->prepareData($_POST['orderEndTime']);
    $orderDuration = $db->prepareData($_POST['orderDuration']);
    $orderTotalPrice = $db->prepareData($_POST['orderTotalPrice']);
    $orderStatus = $db->prepareData($_POST['orderStatus']);
    // $postDate = $db->prepareData($_POST['postDate']);

    $sql = "INSERT INTO `order` VALUES ('" . $orderId . "', '" . $baristaId . "', '" . $userId . "', '" . $orderStartTime . "', '" . $orderEndTime . "', '" . $orderDuration . "', '" . $orderTotalPrice . "', '" . $orderStatus . "');";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Insert order success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
