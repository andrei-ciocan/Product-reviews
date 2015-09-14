(function(){

	angular
	.module('app')
	.controller('ReviewController',ReviewController);


	function ReviewController($scope,$http,MessageSender){
		
		//detecting when the service message is changed and reloading data everytime an user adds a comment so his comment will be displayed instantly
		$scope.$watch(MessageSender.getMessage,function(newM, oldM){

			$http.get("getdata.php")	
			.success(function (response) {

				$scope.first = { reviews:response.reviews, currentPage:1 , entryLimit:20, totalItems:response.reviews.length, numberOfPages:getNumberOfPages, addReview:addNewReview};


			});

		});


		function getNumberOfPages(total,entry) 
		{
			return Math.ceil(total/entry);
		};

		function addNewReview(msg,reviews){

			reviews.push(msg);

		}



	};

})();