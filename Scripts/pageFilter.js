(function(){
	angular
	.module('app')
	.filter('startFrom',startFrom);


//start position filter
function startFrom() {
	return function(input, start) {
		if (!input || !input.length) { return; }
        start = +start; //parse to int
        return input.slice(start);
    }
};

})();