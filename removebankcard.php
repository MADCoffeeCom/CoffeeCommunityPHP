<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $cardNo = $db->prepareData($_POST['cardNo']);

    $sql = "DELETE FROM bankcard WHERE cardNo = '" . $cardNo . "'";
    if(mysqli_query($db->getConnect(), $sql)){
        echo "Delete Success";
    } else echo "No results";
} else echo "Error: Database connection";

?>
