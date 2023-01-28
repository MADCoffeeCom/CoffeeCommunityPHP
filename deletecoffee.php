<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $coffeeId = $db->prepareData($_POST['coffeeId']);

    $sql = "DELETE FROM coffee WHERE coffeeId='" . $coffeeId . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Delete Success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
