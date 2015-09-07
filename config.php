<?php
$conn = new mysqli("localhost", "root", "", "product_reviews");
if($conn->connect_errno > 0){
    die('Unable to connect to database [' . $db->connect_error . ']');
}


?>