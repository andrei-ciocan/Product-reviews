<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include('config.php');
//getting data from reviews table
$result = $conn->query("SELECT reviewer_name, reviewer_email, review_content, rating FROM reviews");

$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
	
	//adding , to output if it's not the last item, so we can keep a correct json format
	if ($outp != "") {$outp .= ",";}

    // adding gravatar photo if available, if not a default image will be displayed
	$email=$rs["reviewer_email"];
	$default = "http://sandbox.rioranchoyellowjackets.com/wp-content/uploads/2013/11/placeholder1.gif";
	$size = 120;
	$reviewerPhoto= "http://www.gravatar.com/avatar/" . md5( strtolower( trim( $email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;

    //concatenate the obtained data in order to create a json format
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