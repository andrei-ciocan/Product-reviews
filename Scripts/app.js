(function(){
	var app=angular.module("App",[]);


//start position filter
app.filter('startFrom', function() {
	return function(input, start) {
		if (!input || !input.length) { return; }
        start = +start; //parse to int
        return input.slice(start);
    }
});


app.controller("ReviewController",function($scope,$http){

	$http.get("getdata.php")
	.success(function (response) {
		$scope.reviews = response.reviews;
		$scope.currentPage=1;
		$scope.entryLimit = 20;
		$scope.totalItems=$scope.reviews.length;
    });//get request to display reviews and setting pagination defaults


	$scope.setPage = function(pageNo) {
		$scope.currentPage = pageNo;
	};

	$scope.numberOfPages = function() 
	{
		return Math.ceil($scope.totalItems / $scope.entryLimit);
	};

});



app.controller("ReviewCreator", function($scope,$http){
	this.review={};
	this.review.reviewerPhoto="http://sandbox.rioranchoyellowjackets.com/wp-content/uploads/2013/11/placeholder1.gif";
	this.error="";
	$scope.review_submit = function(review,something) {
		this.review = angular.copy(review);

		var request=$http({
			method: "post",
			url:window.location.href + "db.php",
			data:{
				'reviewer_name'     : this.review.reviewerName, 
				'reviewer_email'     : this.review.reviewerEmail, 
				'review_content' :  this.review.reviewContent,
				'rating' :  this.review.rating
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
		});

		request.success(function(data, status, headers, config){

			if (data.msg != '')
				{	alert(data.msg);
					var revcopy =angular.copy(review);
					something.push(revcopy);
					revcopy={};
				}
				else
					{	alert(data.error);

					}
				});


	}

});

})();