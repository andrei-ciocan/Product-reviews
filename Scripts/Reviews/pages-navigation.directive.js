(function(){

	angular
	.module('app')
	.directive('myappReviewsPageNavigation',myappReviewsPageNavigation);


	function myappReviewsPageNavigation(){
		return{
			restrict: 'E',
			templateUrl:'Scripts/Reviews/pages-navigation.html',
			scope: {
     		 type: '=type'
    		}

		};
	}

})();