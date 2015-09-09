<form name="reviewForm" class="review-form"  ng-submit="reviewForm.$valid && revCreate.review_submit(revCreate.review,vm.reviews)" novalidate>
	<input type="text" name="Name" ng-model="revCreate.review.reviewerName" ng-minlength="2" ng-pattern="/^[a-zA-Z\s]*$/" placeholder="Name" required></br>
	<input type="email" name="Email" ng-model="revCreate.review.reviewerEmail" placeholder="Email" required>
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