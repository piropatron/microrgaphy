$(document).ready(
	function(){
		
		$('button[type=submit]').on(
			'click',
			function(){
				var login = $('.dev-login').val();
				var password = $('.dev-password').val();
				$.post(
					window.location.protocol +'//'+window.location.hostname+'/login/singin',
					{
						login:login,
						password:password
					},
					function(response){
						console.log(response);
						if(response.login === 'true'){
							window.location.href =  window.location.protocol +'//'+window.location.hostname+'/admin/control'
						}
					},
					'json'
				);
				return false;
			}
		);
	}
);