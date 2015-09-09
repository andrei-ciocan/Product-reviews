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