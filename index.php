<!doctype html>
<html ng-app="App">
<head>
	<title>Product reviews</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css" >
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>	
</head>
<body ng-controller="ReviewController as revCtrl">
	<div class="page-width">
		<form name="reviewForm" class="review-form" ng-controller="ReviewCreator as revCreate" ng-submit="reviewForm.$valid && revCreate.addReview()" novalidate>
			<input type="text" name="Name" ng-model="revCreate.review.reviewerName" placeholder="Name"></br>
			<input type="text" name="Email" ng-model="revCreate.review.reviewerEmail" placeholder="Email"></br>
			<textarea name="review" ng-model="revCreate.review.reviewContent" placeholder="Add your review"></textarea>
			<div class="review-form_container">
				<span class="starRating">
					<input id="rating5" ng-model="revCreate.review.rating" type="radio" name="rating" value="5">
					<label for="rating5">5</label>
					<input id="rating4" type="radio" name="rating" value="4">
					<label for="rating4">4</label>
					<input id="rating3" type="radio" name="rating" value="3">
					<label for="rating3">3</label>
					<input id="rating2" type="radio" name="rating" value="2">
					<label for="rating2">2</label>
					<input id="rating1" type="radio" name="rating" value="1">
					<label for="rating1">1</label>
				</span>
				<input type="submit" name="Submit" value="Add my review!">
			</div>
		</form>

		<div class="reviews">

			<div ng-repeat="review in revCtrl.reviews " class="review">
				<div class="review_user">
					<img ng-src="{{review.reviewerPhoto}}">
					<div class="review_username">{{review.reviewerName}}</div>
				</div>
				
				<div class="review_user-comment">
				{{review.reviewContent}}
				</div>
				<div class="review_user-rating"><img src="star_on.png"><img src="star_on.png"><img src="star_on.png"><img src="star_on.png"><img src="star_on.png">

				</div>
			</div>
			
			<div class="pages"></div>
	</div>
</form>
<script type="text/javascript" src="Scripts/angular.min.js"></script>
<script type="text/javascript" src="Scripts/app.js"></script>
</body>
</html>