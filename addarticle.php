<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $articleId = $db->prepareData($_POST['articleId']);
    $articleTitle = $db->prepareData($_POST['articleTitle']);
    $articleType = $db->prepareData($_POST['articleType']);
    $articleContent = $db->prepareData($_POST['articleContent']);
    $articlePic = $db->prepareData($_POST['articlePic']);
    $adminId = $db->prepareData($_POST['adminId']);

    $sql = "INSERT INTO learn VALUES ('" . $articleId . "', '" . $adminId . "', '" . $articleTitle . "', '" . $articleType . "', 0, 0, '" . $articleContent . "', '" . $articlePic . "');";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Update success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
