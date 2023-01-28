<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $walletBalance = $db->prepareData($_POST['walletBalance']);
    $userId = $db->prepareData($_POST['userId']);
    $walletId = $db->prepareData($_POST['walletId']);
    $walletBalance = 0;
    $walletPin = NULL;
    $sql = "INSERT wallet VALUES ('". $walletId . "', '". $userId . "', '" . $walletBalance . "', '" . $walletPin . "');";
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Insert Wallet success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
