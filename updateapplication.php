<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $applicationId = $db->prepareData($_POST['applicationId']);
    $status = $db->prepareData($_POST['status']);

    $sql = "UPDATE application SET applicationStatus = '" . $status . "' WHERE applicationId = '" . $applicationId . "'";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Update success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
