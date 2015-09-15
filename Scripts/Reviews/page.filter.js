(function(){
	angular
	.module('app')
	.filter('startFrom',startFrom);


//start position filter
function startFrom() {
	
	var startPosition=function(input, start) {
		if (!input || !input.length) { return; }
        start = +start; //parse to int
        return input.slice(start);
    }

    return startPosition;
};

})();