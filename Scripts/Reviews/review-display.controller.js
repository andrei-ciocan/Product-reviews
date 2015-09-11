(function(){

	angular
	.module('app')
	.controller('ReviewController',['$scope','$http', ReviewController]);


	function ReviewController($scope,$http){
		var vm=this;
//get request to display reviews, also setting pagination defaults
$http.get("getdata.php")
.success(function (response) {
	vm.reviews = response.reviews;
	vm.currentPage=1;
	vm.entryLimit = 20;
	vm.totalItems=vm.reviews.length;
	vm.numberOfPages= numberOfPages;

	$scope.first = { reviews:vm.reviews, currentPage: vm.currentPage, entryLimit: vm.entryLimit, totalItems:vm.totalItems, numberOfPages:vm.numberOfPages};
	

});


function numberOfPages(totalItems,entryLimit) 
{
	return Math.ceil(vm.totalItems / vm.entryLimit);
};



};

})();