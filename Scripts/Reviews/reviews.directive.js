(function(){

	angular
	.module('app')
	.directive('myappUsersReviews',myappUsersReviews);


	function myappUsersReviews(){
		return{
			restrict: 'E',
			templateUrl:'Scripts/Reviews/reviews.php'


		};
	}

})();