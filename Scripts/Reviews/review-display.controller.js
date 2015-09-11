(function(){

	angular
	.module('app')
	.controller('ReviewController',['$scope','$http', ReviewController]);


	function ReviewController($scope,$http){
		var vm=this;
//get request to display reviews, also setting pagination defaults
$http.get("getdata.php")
.success(function (response) {

	$scope.first = { reviews:response.reviews, currentPage:1 , entryLimit:20, totalItems:response.reviews.length, numberOfPages:getNumberOfPages};
	

});


function getNumberOfPages(total,entry) 
{
	return Math.ceil(total/entry);
};



};

})();