<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $feedbackId = $db->prepareData($_POST['feedbackId']);
    $ratings = $db->prepareData($_POST['ratings']);
    $feedbackDesc = $db->prepareData($_POST['feedbackDesc']);
    $userId = $db->prepareData($_POST['userId']);

    $sql = "INSERT INTO feedback VALUES ('" . $feedbackId . "', '" . $ratings . "', '" . $feedbackDesc . "', '" . $userId . "');";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Update success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
