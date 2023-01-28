<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $postId = $db->prepareData($_POST['postId']);
    $postDesc = $db->prepareData($_POST['postDesc']);
    $postPic = $db->prepareData($_POST['postPic']);

    $sql = "UPDATE post SET postDesc = '" . $postDesc . "', postPicUrl = '" . $postPic . "' WHERE postId ='" . $postId . "'";
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Update Success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
