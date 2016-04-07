$(document).ready(function(){

	saveAjaxForm($('#register').find('form'), false, true);
	saveAjaxForm($('#passwordReset').find('form'), false, true);
	saveAjaxForm($('#userEdit').find('form'), false, true);
	saveAjaxForm($('#passwordChange').find('form'), false, true);

	var loginBlock = $('#login').find('form');
	var passRemind = $('#passwordRemindModal');

	if(window.location.hash == '#passwordRemind')
		passRemind.modal('show');

	saveAjaxForm(loginBlock, false, true, function(){
		if (navigator.appName == "Netscape"){
			if ( history.pushState ) history.pushState( {}, document.title, location.href );
		}
	});

	saveAjaxForm(passRemind, true, true, function(){
		passRemind.on('hidden.bs.modal', function(){
			$('#passwordRemindSendModal').modal('show');
		});

	});

	passRemind.on('loaded.bs.modal', function(){
		var inputEmail = $('#loginEmail').val();
		if(inputEmail)
		{
			$('#rememberEmail').val(inputEmail);
		}
	});
});