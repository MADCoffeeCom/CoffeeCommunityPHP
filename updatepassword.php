<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $password = $db->prepareData($_POST['password']);
    $email = $db->prepareData($_POST['email']);
    $sql = "UPDATE profile SET password = '" . $password . "' WHERE email = '" . $email . "'";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Update success";
    } else echo "No results";
} else echo "Error: Database connection";

?>