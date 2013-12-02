$(document).ready(function(){

  $('#admin-form').validate({
    rules: {
      login: {
	required: true,
	minlength: 2,
	maxlength: 12
      },
      password: {
	required: true,
	minlength: 2,
	maxlength: 12
      }
    },
    
    submitHandler: function(){
      var login = $('#login').val();
      var password = $('#password').val();
      $.post( window.location.protocol +'//'+ window.location.hostname + '/admin/login', $('#admin-form').serialize() ,
	      function(data){
		if(data == 'TRUE'){
		  $('.content').load(window.location.protocol +'//'+ window.location.hostname + '/admin');
		}else{
		  alert(data);
		}
	      });
    }
  });
  
});