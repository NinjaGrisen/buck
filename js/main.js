$(document).ready(function(){
	/******************Index page*********************/

	//Grayout icons
	$('.icon').on('click', function(){
		$(this).toggleClass("in-active");
	});


	/******************Splash page*********************/

	//Show register
	$('#showResiter').on('click', function(){
		$('.activeRegister').addClass('registerActiveRemove');
		$('.buckSplash').addClass('buckSplashRegister');
		$('.registerForm').addClass('displayRegisterForm');
	});

});