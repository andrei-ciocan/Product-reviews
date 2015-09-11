<?php
//database current config, used in php files in order to connect to the database
$conn = new mysqli("localhost", "root", "root", "product_reviews");
if($conn->connect_errno > 0){
	die('Unable to connect to database [' . $db->connect_error . ']');
}

?>