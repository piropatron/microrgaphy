$(document).ready(
	function(){
		
		$('button[type=submit]').on(
			'click',
			function(){
				$('#myform').submit();
				return false;
			}
		);
	}
);