<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $upOrDown = $db->prepareData($_POST['upOrDown']);
    $number = $db->prepareData($_POST['number']);
    $postId = $db->prepareData($_POST['postId']);
    $sql = "UPDATE post SET " . $upOrDown . " = " . $number . " WHERE postId = '" . $postId . "'";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Update success";
    } else echo "No results";
} else echo "Error: Database connection";

?>