<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $userid = $db->prepareData($_POST['baristaId']);
    $sql = "SELECT c.coffeeId FROM coffee c WHERE c.baristaId = '" . $userid . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['coffeeId'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
