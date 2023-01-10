<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $userId = $db->prepareData($_POST['userId']);
    $baristaId = $db->prepareData($_POST['baristaId']);

    $sql = "UPDATE profile SET baristaId = '" . $baristaId . "' WHERE userId = '" . $userId . "'";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Update success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
