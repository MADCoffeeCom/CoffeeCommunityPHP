<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['userId']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        $table = "profile";
        $username = $db->prepareData($_POST['username']);
        $userId = $db->prepareData($_POST['userId']);
        $password = $db->prepareData($_POST['password']);
        $email = $db->prepareData($_POST['email']);
        // $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO " . $table . " (username, userId, password, email) VALUES ('" . $username . "','" . $userId . "','" . $password . "','" . $email . "')";
        if (mysqli_query($db->getConnect(), $sql)) {
            echo "Sign Up Success";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>
