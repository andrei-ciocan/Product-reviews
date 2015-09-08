<?php
include('config.php');
$result="";
$postdata=file_get_contents("php://input");


if($postdata!="")
	{$data=json_decode($postdata);

		$reviewerName = $data->reviewer_name; 
		$reviewerEmail = $data->reviewer_email;
		$reviewContent = $data->review_content;
		$rating = $data->rating;


		$query="SELECT * from reviews WHERE reviewer_email='$reviewerEmail'";
		$result = mysqli_query($conn, $query);

		if ($result->num_rows>0) {
			$arr = array('msg' => "", 'error' => 'Email already existent in our database!');
			$jsn = json_encode($arr);
			print_r($jsn);
		} 

		else
		{
			mysqli_query($conn,"INSERT INTO reviews (reviewer_name,reviewer_email,review_content,rating) 
				VALUES ('$reviewerName','$reviewerEmail','$reviewContent','$rating')  ");

			$arr = array('msg' => "Review added successfully!", 'error' => '');
			$jsn = json_encode($arr);
			print_r($jsn);
		}


	}
	mysqli_close($conn);
	?>