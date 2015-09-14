<!doctype html>
<html ng-app="app">
<head>
	<title>Product reviews</title>
	<link rel="stylesheet" type="text/css" href="Styles/style.css" >
	<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>	
</head>
<body ng-controller="ReviewController as vm">
	<div class="page-width">
		<myapp-reviews-displayed-on-page type="first"></myapp-reviews-displayed-on-page>
		<myapp-review-form></myapp-review-form>
		<myapp-users-reviews type="first"></myapp-users-reviews>
		<myapp-reviews-page-navigation type="first"></myapp-reviews-page-navigation>	
	</div>
	
	<script type="text/javascript" src="Scripts/angular.js"></script>
	<script type="text/javascript" src="Scripts/app.module.js"></script>
	<script type="text/javascript" src="Scripts/message.factory.js"></script>
	<script type="text/javascript" src="Scripts/Reviews/review-display.controller.js"></script>
	<script type="text/javascript" src="Scripts/Forms/review-creator.controller.js"></script>
	<script type="text/javascript" src="Scripts/Reviews/page.filter.js"></script>
	<script type="text/javascript" src="Scripts/Forms/review-form.directive.js"></script>
	<script type="text/javascript" src="Scripts/Reviews/reviews.directive.js"></script>
	<script type="text/javascript" src="Scripts/Reviews/reviews-displayed.directive.js"></script>
	<script type="text/javascript" src="Scripts/Reviews/pages-navigation.directive.js"></script>

</body>
</html>