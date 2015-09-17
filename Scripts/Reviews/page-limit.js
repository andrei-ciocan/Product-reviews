(function(){

	angular
	.module('app')
	.controller('pageLimitController',pageLimitController);
	.directive('pageLimit',pageLimit);


	function pageLimit(){
		return{
			restrict: 'E',
			templateUrl:'Scripts/Reviews/pageLimit.html',
			scope: {
     		 limit: '=',
     		 change: '='
    		}

		};
	}



	function pageLimitController() {

		this.entryLimit=5;
		this.currentPage=1;

	}

})();