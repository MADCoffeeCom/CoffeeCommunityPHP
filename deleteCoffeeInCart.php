<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['userId']) && isset($_POST['coffeeId']) && isset($_POST['amount'])) {
    if ($db->dbConnect()) {
        $table = "cart_item";
        $userId = $db->prepareData($_POST['userId']);
        $coffeeId = $db->prepareData($_POST['coffeeId']);
        $amount = $db->prepareData($_POST['amount']);
        // $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "DELETE FROM " . $table . " WHERE coffeeId = '". $coffeeId . "' AND userId = '" . $userId . "'";
        if (mysqli_query($db->getConnect(), $sql)) {
            echo "Successfully deleted coffee in cart";
        } else echo "Failed to delete coffee in  cart ";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
