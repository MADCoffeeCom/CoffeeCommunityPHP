<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $sql = "SELECT COUNT(feedbackId) AS countfeedback FROM feedback";    

    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        $row = mysqli_fetch_assoc($result);
        echo $row['countfeedback'];
    } else echo "No results";
} else echo "Error: Database connection";

?>
