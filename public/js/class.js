$(document).ready(function() {

	//click button to signin
	$('#signin-blue').click(function() {

		$(window.location).attr('href', '/login');

	});

	//click button to signup
	$('#signup-blue').click(function() {
	
		$(window.location).attr('href', '/register');

	});

	//auto correct number / price input
	$("#price").maskMoney();

});