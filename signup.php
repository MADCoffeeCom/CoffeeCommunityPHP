<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['userId']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['userStreetNo'])&& isset($_POST['userTaman']) && isset($_POST['userPostalCode'])&& isset($_POST['userState'])) {
    if ($db->dbConnect()) {
        $table = "profile";
        $username = $db->prepareData($_POST['username']);
        $userId = $db->prepareData($_POST['userId']);
        $password = $db->prepareData($_POST['password']);
        $password = password_hash($password, PASSWORD_DEFAULT);
        $email = $db->prepareData($_POST['email']);
        $userStreetNo = $db->prepareData($_POST['userStreetNo']);
        $userTaman = $db->prepareData($_POST['userTaman']);
        $userPostalCode = $db->prepareData($_POST['userPostalCode']);
        $userState = $db->prepareData($_POST['userState']);
        // $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO " . $table . " (username, userId, password, email, userStreetNo, userTaman,userPostalCode,userState) VALUES ('" . $username . "','" . $userId . "','" . $password . "','" . $email . "' ,'" . $userStreetNo . "' ,'" . $userTaman . "' ,'" . $userPostalCode . "' ,'" . $userState . "')";
        if (mysqli_query($db->getConnect(), $sql)) {
            echo "Sign Up Success";
        } else echo "Sign up Failed";
    } else echo "Error: Database connection";
} else echo "All fields are required";
?>

