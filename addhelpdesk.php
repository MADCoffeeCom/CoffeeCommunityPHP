<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $helpId = $db->prepareData($_POST['helpId']);
    $question = $db->prepareData($_POST['question']);
    $answer = $db->prepareData($_POST['answer']);

    $sql = "INSERT INTO helpdesk VALUES ('" . $helpId . "', '" . $question . "', '" . $answer . "');";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Update success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
