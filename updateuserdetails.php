<?php
require "DataBase.php";
$db = new DataBase();
$db2 = new DataBase();
if ($db->dbConnect() && $db2->dbConnect()) {

    //Paste ur sql code here
    $email = $db->prepareData($_POST['email']);
    $userId = $db->prepareData($_POST['userId']);
    $oldpassword = $db->prepareData($_POST['oldpassword']);
    $password = $db->prepareData($_POST['password']);
    $password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "select * from `profile` where userId = '" . $userId . "'";
    $result = mysqli_query($db->connect, $sql);
    $row = mysqli_fetch_assoc($result);
    if (mysqli_num_rows($result) != 0) {
        $dbuserID = $row['userId'];
        $dbpassword = $row['password'];
        if (password_verify($oldpassword, $dbpassword)) {
            $sql2 = "UPDATE profile SET email = '" . $email . "', password = '" . $password . "' WHERE userId = '" . $userId . "'";
            if (mysqli_query($db2->getConnect(), $sql2)){
                echo "Update Success";
            } else echo "No results";
        } else echo "Old password wrong ";
    } else echo "Old password wrong ";
} else echo "Error: Database connection";

?>
