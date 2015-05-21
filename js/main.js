$(document).ready(function(){
	/******************Index page*********************/

	//Toggle menus
	$('.filter-menu').click(function(){
		$(this).toggleClass('active');
		$('.menuFilter').toggleClass("active");
		$('.icon').toggleClass('dropOut');
	});

	//Grey out icon
	$('.icon').click(function(){
		$(this).toggleClass('inactive');
	});

	$('.add-button-menu').click(function(){
		$('.add-item-box').toggleClass('hidden');
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