<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $walletId = $db->prepareData($_POST['walletId']);
    $sql = "SELECT * FROM bankcard WHERE walletId='" . $walletId . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['cardNo'] . " - " . $row['cardHolderName'] . " - " . $row['cardCvv'] . " - " . $row['expDate'] . " - " . $row['bankName'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
