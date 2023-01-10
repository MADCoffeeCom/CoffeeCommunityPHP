<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $orderId = $db->prepareData($_POST['orderId']);
    $coffeeId = $db->prepareData($_POST['coffeeId']);
    $amount = $db->prepareData($_POST['amount']);

    $sql = "INSERT INTO `order_item` VALUES ('" . $orderId . "', '" . $coffeeId . "', '" . $amount . "');";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Insert order_item success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
