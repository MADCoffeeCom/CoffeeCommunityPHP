<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $cardNo = $db->prepareData($_POST['cardNo']);
    $walletId = $db->prepareData($_POST['walletId']);
    $cardHolderName = $db->prepareData($_POST['cardHolderName']);
    $cardCvv = $db->prepareData($_POST['cardCvv']);
    $expDate = $db->prepareData($_POST['expDate']);
    $bankName = $db->prepareData($_POST['bankName']);

    $sql = "INSERT INTO bankcard VALUES ('" . $cardNo . "', '" . $walletId . "', '" . $cardHolderName . "', '" . $cardCvv . "', '" . $expDate . "', '" . $bankName . "')";
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Add Success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
