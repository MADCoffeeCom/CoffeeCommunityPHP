<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $transactionId = $db->prepareData($_POST['transactionId']);
    $senderId = $db->prepareData($_POST['senderId']);
    $receiverId = $db->prepareData($_POST['receiverId']);
    $orderId = $db->prepareData($_POST['orderId']);
    $totalPayment = $db->prepareData($_POST['totalPayment']);
    $paymentType = $db->prepareData($_POST['paymentType']);

    $sql = "INSERT INTO `transaction` VALUES ('" . $transactionId . "', '" . $senderId . "', '" . $receiverId . "', '" . $orderId . "', '" . $totalPayment ."', '" . $paymentType . "');";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Insert success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
