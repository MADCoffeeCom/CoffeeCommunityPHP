<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $orderStatus = $db->prepareData($_POST['orderStatus']);
    $orderId = $db->prepareData($_POST['orderId']);
    $sql = "UPDATE `order` SET orderStatus = '" . $orderStatus . "' WHERE orderId = '" . $orderId . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        echo "Update Success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
