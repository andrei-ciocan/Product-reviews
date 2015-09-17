(function(){

	angular
	.module('app')
	.controller('ReviewController',ReviewController);


	function ReviewController($scope,$http,MessageSender){
		
		//detecting when the service message is changed and reloading data everytime an user adds a comment so his comment will be displayed instantly
		$scope.$watch(MessageSender.getMessage,function(newM, oldM){

			$http.get("getdata.php")	
			.success(function (response) {

				$scope.first = {vm:this, reviews:response.reviews, currentPage:1 , entryLimit:20, totalItems:response.reviews.length, numberOfPages:getNumberOfPages, gotoFirstPage:gotoFirstPage, nextPage:nextPage,prevPage:prevPage, disablePrev:disablePrev, disableNext:disableNext };
				

			});

		});


		function getNumberOfPages() 
		{
			return Math.ceil(this.totalItems/this.entryLimit);
		};

		function gotoFirstPage(){
			$scope.first.currentPage=1;
		}

		function nextPage(){
			this.currentPage=this.currentPage+1;

		}

		function prevPage(){
			this.currentPage=this.currentPage-1;

		}

		function disablePrev(){
			if(this.currentPage===1)
				return 1;
			return 0;

		}

		function disableNext(){
			if(this.currentPage>=this.numberOfPages())
				return 1;
			return 0;

		}



	};

})();