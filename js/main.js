$(document).ready(function(){
	/******************Index page*********************/

	//Grayout icons
	$('.icon').on('click', function(){
		$(this).toggleClass("in-active");
	});

	//Toggle menus
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
	$('#showRegister').on('click', function(){
		$('.activeRegister').addClass('registerActiveRemove');
		$('.buckSplash').addClass('buckSplashRegister');
		$('.registerForm').addClass('displayRegisterForm');
	});

	//Validation
	$('#newUser').on('click', function(){

		if($('.bday').selectedIndex === 0){
			alert(12);
		}
	});

		//Empty
	
		//Email

		//Password match

});