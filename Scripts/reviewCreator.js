(function(){
angular
.module('app')
.controller('ReviewCreator',ReviewCreator);

function ReviewCreator($http){
	var vm=this;
	vm.review={};

	//adding default reviewer photo to instantly submitted comment
	vm.review.reviewerPhoto="http://sandbox.rioranchoyellowjackets.com/wp-content/uploads/2013/11/placeholder1.gif";
	vm.review_submit = review_submit;

	
	function review_submit(review,something) {
		vm.review = angular.copy(review);

		//post request sent to db.php to insert fields into database
		var request=$http({
			method: "post",
			url:window.location.href + "db.php",
			data:{
				'reviewer_name'     : vm.review.reviewerName, 
				'reviewer_email'     : vm.review.reviewerEmail, 
				'review_content' :  vm.review.reviewContent,
				'rating' :  vm.review.rating
			},
			headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
		});

		//managing request success and displaying the new submitted review if the mail is valid
		request.success(function(data, status, headers, config){

			if (data.msg != '')
				{	alert(data.msg);

					//validation message and displaying review if it's valid
					var revcopy = angular.copy(review);
					something.push(revcopy);
					revcopy={};
				}
				else
					{	//displaying error if email already exists in the database
						alert(data.error);

					}
				});
	}

};

})();