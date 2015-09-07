<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.php');

$result = $conn->query("SELECT reviewer_name, reviewer_email, review_content, rating FROM reviews");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
      $email=$rs["reviewer_email"];
	  $default = "http://sandbox.rioranchoyellowjackets.com/wp-content/uploads/2013/11/placeholder1.gif";
      $size = 120;
      $reviewerPhoto= "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
      
    $outp .= '{"reviewerName":"'  . $rs["reviewer_name"] . '",';
    $outp .= '"reviewerEmail":"'   . $rs["reviewer_email"]        . '",';
    $outp .= '"reviewContent":"'. $rs["review_content"]     . '",';
    $outp .= '"reviewerPhoto":"'. $reviewerPhoto  . '",';
    $outp .= '"rating":"'. $rs["rating"]     . '"}';  
}
$outp ='{"reviews":['.$outp.']}';
$conn->close();

echo($outp);
?>