<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $helpId = $db->prepareData($_POST['helpId']);

    $sql = "DELETE FROM helpdesk WHERE helpId='" . $helpId . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Delete Success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
