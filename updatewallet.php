<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $walletBalance = $db->prepareData($_POST['walletBalance']);
    $userId = $db->prepareData($_POST['userId']);
    $sql = "UPDATE wallet SET walletBalance = '" . $walletBalance . "' WHERE userId = '" . $userId . "'";
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Update success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
