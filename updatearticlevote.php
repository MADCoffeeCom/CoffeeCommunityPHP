<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $upOrDown = $db->prepareData($_POST['upOrDown']);
    $number = $db->prepareData($_POST['number']);
    $articleId = $db->prepareData($_POST['articleId']);
    $sql = "UPDATE learn SET " . $upOrDown . " = " . $number . " WHERE articleId = '" . $articleId . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        echo "Update success";
    } else echo "No results";
} else echo "Error: Database connection";

?>