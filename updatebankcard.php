<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $cardNo = $db->prepareData($_POST['cardNo']);
    $cardHolderName = $db->prepareData($_POST['cardHolderName']);
    $cardCvv = $db->prepareData($_POST['cardCvv']);
    $expDate = $db->prepareData($_POST['expDate']);
    $bankName = $db->prepareData($_POST['bankName']);

    $sql = "UPDATE bankcard SET cardHolderName = '" . $cardHolderName . "', cardCvv = '" . $cardCvv . "', expDate = '" . $expDate . "', bankName = '" . $bankName . "' WHERE cardNo='" . $cardNo . "'";
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Update Success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
