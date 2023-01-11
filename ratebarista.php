<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $baristaId = $db->prepareData($_POST['baristaId']);
    $userId = $db->prepareData($_POST['userId']);
    $rating = $db->prepareData($_POST['rating']);
    $ratingDesc = $db->prepareData($_POST['ratingDesc']);
    $sql = "INSERT INTO `rating` VALUES ('" . $baristaId . "', '" . $userId . "', '" . $rating . "', '" . $ratingDesc . "');";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Add success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
