<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $baristaId = $db->prepareData($_POST['baristaId']);
    $baristaDesc = $db->prepareData($_POST['baristaDesc']);
    $status = $db->prepareData($_POST['status']);
    $years = $db->prepareData($_POST['years']);

    $sql = "INSERT INTO barista VALUES ('" . $baristaId . "', '" . $baristaDesc . "', '" . $status . "', '" . $years . "');";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Update success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
