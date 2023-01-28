<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $applicationId = $db->prepareData($_POST['applicationId']);
    $userId = $db->prepareData($_POST['userId']);
    $userBackground = $db->prepareData($_POST['userBackground']);
    $yearsOfExperience = $db->prepareData($_POST['yearsOfExperience']);
    $status = $db->prepareData($_POST['status']);

    $sql = "INSERT INTO `application` VALUES ('" . $applicationId . "', '" . $userId . "', '" . $userBackground . "', '" . $yearsOfExperience . "', '" . $status . "');";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Add success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
