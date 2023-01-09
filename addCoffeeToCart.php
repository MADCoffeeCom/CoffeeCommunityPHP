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
        $sql = "INSERT INTO " . $table . " (userId, coffeeId, amount) VALUES ('" . $userId . "','" . $coffeeId . "','" . $amount. "')";
        if (mysqli_query($db->getConnect(), $sql)) {
            echo "Successfully added coffee to cart";
        } else echo "Failed to add coffee to cart ";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
