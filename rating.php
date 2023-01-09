<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $baristaId = $db->prepareData($_POST['baristaId']);
    $sql = "SELECT r.baristaId, p.username, r.rating, r.ratingDesc FROM rating r LEFT JOIN profile p ON p.userId = r.userId WHERE r.baristaId='" . $baristaId . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['username'] . " - " . $row['rating'] . " - " . $row['ratingDesc'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
