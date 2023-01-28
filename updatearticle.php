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

    $sql = "UPDATE learn SET articleTitle = '" . $articleTitle . "', articleType = '" . $articleType . "', articleContent = '" . $articleContent . "', articlePicUrl = '" . $articlePic . "' WHERE articleId='" . $articleId . "'";
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Update Success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
