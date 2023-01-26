<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $sql = "SELECT COUNT(applicationId) AS countId FROM application";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo $row['countId'];
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>