<!doctype html>
<html ng-app="app">
<head>
	<title>Product reviews</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css" >
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>	
</head>
<body ng-controller="ReviewController as vm">
	<div class="page-width">
		<div class="pagesize" >Results on Page:
			<select ng-model="vm.entryLimit" ng-change="vm.currentPage = 1" class="form-control">
				<option>5</option>
				<option>10</option>
				<option>20</option>
				<option>50</option>
				<option>100</option>
			</select>
		</div>
		<form name="reviewForm" class="review-form" ng-controller="ReviewCreator as revCreate" ng-submit="reviewForm.$valid && revCreate.review_submit(revCreate.review,vm.reviews)" novalidate>
			<input type="text" name="Name" ng-model="revCreate.review.reviewerName" placeholder="Name" required></br>
			<input type="email" name="Email" ng-model="revCreate.review.reviewerEmail" placeholder="Email" required>
			<p class="errormsg" ng-repeat="error in errors"></p>
			</br>
			<textarea name="review" ng-model="revCreate.review.reviewContent" placeholder="Add your review" required></textarea>
			<div class="review-form_container">
				<span class="starRating">
					<input id="rating5" ng-model="revCreate.review.rating" ng-required="!revCreate.review.rating" type="radio" name="rating" value="5">
					<label for="rating5">5</label>
					<input id="rating4" ng-model="revCreate.review.rating" ng-required="!revCreate.review.rating" type="radio" name="rating" value="4">
					<label for="rating4">4</label>
					<input id="rating3" ng-model="revCreate.review.rating" ng-required="!revCreate.review.rating" type="radio" name="rating" value="3">
					<label for="rating3">3</label>
					<input id="rating2"  ng-model="revCreate.review.rating" ng-required="!revCreate.review.rating" type="radio" name="rating" value="2">
					<label for="rating2">2</label>
					<input id="rating1"  ng-model="revCreate.review.rating" ng-required="!revCreate.review.rating" type="radio" name="rating" value="1">
					<label for="rating1">1</label>
				</span>
				<input type="submit" name="Submit"  value="Add my review!">
			</div>
		</form>

		<div class="reviews">

			<div ng-repeat="review in vm.reviews | startFrom:(vm.currentPage-1)*vm.entryLimit | limitTo:vm.entryLimit  track by $index " class="review">
				<div class="review_user">
					<img ng-src="{{review.reviewerPhoto}}">
					<div class="review_username">{{review.reviewerName}}</div>
				</div>
				
				<div class="review_user-comment">
					{{review.reviewContent}}
				</div>
				
				<div class="review_user-rating" ng-show="review.rating==='5'">
					<img src="Images/star_on.png"><img src="Images/star_on.png"><img src="Images/star_on.png"><img src="Images/star_on.png"><img src="Images/star_on.png">
				</div>
				<div class="review_user-rating" ng-show="review.rating==='4'">
					<img src="Images/star_on.png"><img src="Images/star_on.png"><img src="Images/star_on.png"><img src="Images/star_on.png"><img src="Images/star_off.png">
				</div>
				<div  class="review_user-rating" ng-show="review.rating==='3'">
					<img src="Images/star_on.png"><img src="Images/star_on.png"><img src="Images/star_on.png"><img src="Images/star_off.png"><img src="Images/star_off.png">
				</div>
				<div  class="review_user-rating" ng-show="review.rating==='2'">
					<img src="Images/star_on.png"><img src="Images/star_on.png"><img src="Images/star_off.png"><img src="Images/star_off.png"><img src="Images/star_off.png">
				</div>
				<div  class="review_user-rating" ng-show="review.rating==='1'">
					<img src="Images/star_on.png"><img src="Images/star_off.png"><img src="Images/star_off.png"><img src="Images/star_off.png"><img src="Images/star_off.png">
				</div>
			</div>
		</div>

		<div class="pagination" ng-show="vm.reviews.length">
			<ul>
				<li>
					<button type="button" ng-disabled="vm.currentPage == 1"
					ng-click="vm.currentPage=vm.currentPage-1">PREV</button>
				</li>
				<li>
					<span>Page {{vm.currentPage }} of {{ vm.numberOfPages() }}</span>
				</li>
				<li>
					<button type="button"
					ng-disabled="vm.currentPage >=  vm.numberOfPages() "
					ng-click="vm.currentPage = vm.currentPage+1">NEXT </button>
				</li>
			</ul>
		</div>
	</div>
	
<script type="text/javascript" src="Scripts/angular.js"></script>
<script type="text/javascript" src="Scripts/app.js"></script>
<script type="text/javascript" src="Scripts/reviewController.js"></script>
<script type="text/javascript" src="Scripts/reviewCreator.js"></script>
<script type="text/javascript" src="Scripts/pageFilter.js"></script>

</body>
</html>