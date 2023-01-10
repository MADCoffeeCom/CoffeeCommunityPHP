<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $state = $db->prepareData($_POST['state']);
    $postId = $db->prepareData($_POST['postId']);

    $sql = "UPDATE reported_post SET repostStatus='" . $state . "' WHERE postId='" . $postId . "'";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Update success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
