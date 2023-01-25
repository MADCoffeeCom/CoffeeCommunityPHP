<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $articleId = $db->prepareData($_POST['articleId']);

    $sql = "DELETE FROM learn WHERE articleId='" . $articleId . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Delete Success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
