<?php
require "DataBase.php";
$db = new DataBase();
if (isset($_POST['username']) && isset($_POST['password'])) {
    if ($db->dbConnect()) {
        
        $table = "profile";
        $username = $db->prepareData($_POST['username']);
        $password = $db->prepareData($_POST['password']);

        $sql = "select * from " . $table . " where username = '" . $username . "'";
        $result = mysqli_query($db->connect, $sql);
        $row = mysqli_fetch_assoc($result);

        if (mysqli_num_rows($result) != 0) {
            $dbusername = $row['username'];
            $dbpassword = $row['password'];
            if ($dbusername == $username && $dbpassword == $password) {
                echo "Login Success";
            } else echo "Username or Password wrong";
        } else echo "Username or Password wrong";
    } else echo "Error: Database connection";
} else echo "All fields are required";


?>
