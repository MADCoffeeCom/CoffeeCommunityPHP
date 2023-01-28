<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $userId = $db->prepareData($_POST['userId']);
    // $postDate = $db->prepareData($_POST['postDate']);

    $sql = "DELETE from `cart_item` WHERE userId = '" . $userId . "';";
    if (mysqli_query($db->getConnect(), $sql)) {
        echo "Delete cart_item success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
