(function(){

	angular
	.module('app')
	.directive('starRating',starRating);


	function starRating(){
		return{
			restrict: 'E',
			templateUrl:'Scripts/Reviews/star-rating.html',
			scope: {
     			stars: '='
    		}

		};
	}

})();