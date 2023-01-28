<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $postId = $db->prepareData($_POST['postId']);
    $reason = $db->prepareData($_POST['reason']);

    $sql = "INSERT INTO reported_post VALUES('" . $postId . "', 'P', '" . $reason . "')";
    $result = mysqli_query($db->getConnect(), $sql);
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Delete Success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
