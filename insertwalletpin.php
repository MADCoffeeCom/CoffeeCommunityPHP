<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $walletPin = $db->prepareData($_POST['walletPin']);
    $userId = $db->prepareData($_POST['userId']);
    $walletId = $db->prepareData($_POST['walletId']);

    $sql = "INSERT INTO wallet (walletPin) VALUES ('" . $walletPin . "') WHERE userId = " . $userId . "' AND walletId = '" . $walletId . "'";
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Insert Wallet Pin success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
