<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $sql = "SELECT c.coffeeId, c.coffeeTitle, c.coffeePicUrl, c.coffeeDesc, c.coffeeType, c.coffeePrice, c.ingredients, c.baristaId, p.username, p.userTaman, p.userLocation FROM coffee c LEFT JOIN barista b ON c.baristaId = b.baristaId LEFT JOIN profile p ON c.baristaId = p.baristaId WHERE b.`status` = 1 ORDER BY coffeeId DESC ";    

    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['coffeeId'] . " - " . $row['coffeeTitle'] . " - " . $row['coffeePicUrl'] . " - " . $row['coffeeDesc'] . " - " . $row['coffeeType'] . " - " . $row['coffeePrice'] . " - " . $row['ingredients'] . " - " . $row['baristaId'] . " - " . $row['username'] . " - " . $row['userTaman'] . " - " . $row['userLocation'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
