$(document).ready(function(){
	/******************Index page*********************/

	//Grayout icons
	$('.icon').on('click', function(){
		$(this).toggleClass("in-active");
	});

	$('.filter-menu').click(function(){
		$(this).toggleClass('active');
		$('.menuFilter').toggleClass("active");
		$('.icon').toggleClass('dropOut');
	});
	$('.main-menu').click(function(){
		$('.menuMain').toggleClass("active");
		$('.sidebar').toggleClass('mobDisplay');
		$(this).toggleClass('mainActive');
	});

	/******************Splash page*********************/

	//Show register
	$('#showResiter').on('click', function(){
		$('.activeRegister').addClass('registerActiveRemove');
		$('.buckSplash').addClass('buckSplashRegister');
		$('.registerForm').addClass('displayRegisterForm');
	});

});