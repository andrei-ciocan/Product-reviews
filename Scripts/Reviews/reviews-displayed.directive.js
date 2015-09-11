(function(){

	angular
	.module('app')
	.directive('myappReviewsDisplayedOnPage',myappReviewsDisplayedOnPage);


	function myappReviewsDisplayedOnPage(){
		return{
			restrict: 'E',
			templateUrl:'Scripts/Reviews/reviews-displayed-on-page.html',
			scope: {
     		 type: '=type'
    		}

		};
	}

})();