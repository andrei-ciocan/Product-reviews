(function(){

angular
.module('app')
.controller('ReviewController', ReviewController);


function ReviewController($http){
	var vm=this;
//get request to display reviews, also setting pagination defaults
	$http.get("getdata.php")
	.success(function (response) {
		vm.reviews = response.reviews;
		vm.currentPage=1;
		vm.entryLimit = 20;
		vm.totalItems=vm.reviews.length;
		vm.numberOfPages= numberOfPages;
    });


	function numberOfPages() 
	{
		return Math.ceil(vm.totalItems / vm.entryLimit);
	};

};

})();