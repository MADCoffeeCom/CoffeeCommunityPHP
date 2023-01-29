<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $email = $db->prepareData($_POST['email']);
    $password = $db->prepareData($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);
    $sql = "UPDATE profile SET email = '" . $email . "', password = '" . $password . "' WHERE userId = 'UID_abang'";
    if (mysqli_query($db->getConnect(), $sql)){
        echo "Update Success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
