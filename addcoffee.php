<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $coffeeId = $db->prepareData($_POST['coffeeId']);
    $baristaId = $db->prepareData($_POST['baristaId']);
    $coffeeTitle = $db->prepareData($_POST['coffeeTitle']);
    $coffeePicUrl = $db->prepareData($_POST['coffeePicUrl']);
    $coffeeDesc = $db->prepareData($_POST['coffeeDesc']);
    $coffeeType = $db->prepareData($_POST['coffeeType']);
    $coffeePrice = $db->prepareData($_POST['coffeePrice']);
    $ingredients = $db->prepareData($_POST['ingredients']);

    $sql = "INSERT INTO coffee VALUES ('" . $coffeeId . "', '" . $baristaId . "', '" . $coffeeTitle . "', '" . $coffeePicUrl . "', '" . $coffeeDesc . "', '" . $coffeeType . "', '" . $coffeePrice . "', '" . $ingredients . "')";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Update success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
