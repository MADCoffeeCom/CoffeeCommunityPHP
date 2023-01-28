<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $userId = $db->prepareData($_POST['userId']);
    $sql = "SELECT * FROM wallet WHERE userId='" . $userId . "'";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {
            if($row['walletpin'] == null){
                echo $row['walletId'] . " - " . $row['walletBalance'] . " - " . "empty";
            } else {
                echo $row['walletId'] . " - " . $row['walletBalance'] . " - " . $row['walletpin'];
            }
            //It will return the result here, split the string in Java
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
