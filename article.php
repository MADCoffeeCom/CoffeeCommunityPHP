<?php
require "DataBase.php";
$db = new DataBase();
if ($db->dbConnect()) {

    //Paste ur sql code here
    $sql = "SELECT * FROM learn";    

    $result = mysqli_query($db->getConnect(), $sql);
    if (mysqli_num_rows($result) != 0) {
        while($row = mysqli_fetch_assoc($result)) {

            //It will return the result here, split the string in Java
            echo $row['articleId'] . " - " . $row['adminId'] . " - " . $row['articleTitle'] . " - " . $row['articleType'] . " - " . $row['articleUpVote'] . " - " . $row['articleDownVote'] . " - " . $row['articleContent'] . " - " . $row['articlePicUrl'] . "split";
            
        }
    } else echo "No results";
} else echo "Error: Database connection";

?>
