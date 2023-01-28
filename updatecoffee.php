<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $coffeeTitle = $db->prepareData($_POST['coffeeTitle']);
    $coffeePicUrl = $db->prepareData($_POST['coffeePicUrl']);
    $coffeeDesc = $db->prepareData($_POST['coffeeDesc']);
    $coffeeType = $db->prepareData($_POST['coffeeType']);
    $coffeePrice = $db->prepareData($_POST['coffeePrice']);
    $ingredients = $db->prepareData($_POST['ingredients']);
    $coffeeId = $db->prepareData($_POST['coffeeId']);

    $sql = "UPDATE coffee SET coffeeTitle = '" . $coffeeTitle . "', coffeePicUrl = '" . $coffeePicUrl . "', coffeeDesc = '" . $coffeeDesc . "', coffeeType = '" . $coffeeType . "', ingredients = '" . $ingredients . "', coffeePrice = '" . $coffeePrice . "' WHERE coffeeId='" . $coffeeId . "'";
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Update Success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
