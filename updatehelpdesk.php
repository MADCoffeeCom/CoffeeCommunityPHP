<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $helpId = $db->prepareData($_POST['helpId']);
    $question = $db->prepareData($_POST['question']);
    $answer = $db->prepareData($_POST['answer']);

    $sql = "UPDATE helpdesk SET question = '" . $question . "', answer = '" . $answer . "' WHERE helpId='" . $helpId . "'";
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Update Success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
