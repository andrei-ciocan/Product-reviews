(function(){
	
	angular
	.module('app')
	.service('MessageSender',MessageSender);

	function MessageSender(){
		var vm = this;
		vm.msg={};


		function setMessage(newmsg){
			vm.msg = newmsg;
			
		}

		function getMessage(){
			return vm.msg;
		}

		return({
			getMessage: getMessage,
			setMessage: setMessage,
		})

	}

})();