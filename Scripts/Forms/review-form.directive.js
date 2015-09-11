(function(){

	angular
	.module('app')
	.directive('myappReviewForm',myappReviewForm);


	function myappReviewForm(){
		return{
			restrict: 'E',
			templateUrl:'Scripts/Forms/review-form.html',
			controller: 'ReviewCreator',
			controllerAs:'revCreate'

		};
	}

})();
