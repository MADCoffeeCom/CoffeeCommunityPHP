<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $sql = "SELECT * FROM transaction";
    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['transactionId'] . " - " . $row['senderId'] . " - " . $row['receiverId'] . " - " . $row['orderId'] . " - " . $row['totalPayment'] . " - " . $row['paymentType'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
