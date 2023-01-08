<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $postId = $db->prepareData($_POST['postId']);
    $posterId = $db->prepareData($_POST['posterId']);
    $upVote = $db->prepareData($_POST['upVote']);
    $downVote = $db->prepareData($_POST['downVote']);
    $postDesc = $db->prepareData($_POST['postDesc']);
    $postPicUrl = $db->prepareData($_POST['postPicUrl']);
    // $postDate = $db->prepareData($_POST['postDate']);

    $sql = "INSERT INTO post VALUES ('" . $postId . "', '" . $posterId . "', '" . $upVote . "', '" . $downVote . "', '" . $postDesc . "', '" . $postPicUrl . "', now());";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Update success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
