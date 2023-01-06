<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $userId = $db->prepareData($_POST['userId']);
    $sql = "SELECT PASSWORD FROM profile WHERE userId = '" . $userId . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row['PASSWORD'];
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
