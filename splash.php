 <?php
session_start();

include("includes/headerSplash.php");
?>

<div class="wrapper">
	<div class="splashContent">
		<?php 
		if(!isset($_SESSION['userSession'])) {
			$_SESSION['userSession'] = '';
		}else{
			echo "Your session is running " . $_SESSION['userSession'];
		}
		?>
		<img class="buckSplash" src="img/logo.svg"/>
		<p class="activeRegister">Make a list of everything you want to experience in life and DO IT!</p>
		<div class="login activeRegister">
		<p>Login</p>
		<form id="loginForm">
			<input type="text" name="username" placeholder="Username"/>
			<input type="password" name="password" placeholder="Password"/>
			<input type="button" id="loginButton" value="Log in"/>
			<input type="checkbox"/>
			<label>Remember me</label>
			<a href="#">Forgot password?</a>
		</form>
		</div>
		<div class="register">
			<p>New to Bucket List?</p>
				<form class="registerForm">
					<input type="text" name="username" placeholder="Username"/>
					<input type="text" name="mail" placeholder="Email"/>
					<input type="text" name="name" placeholder="Full name" />
					<div id="age">
						
					</div>
					<input type="password" name="password" placeholder="Password"/>
					<input type="Password" placeholder="Repeat Password"/>
					<input type="checkbox">
					<label>I accept the <a href="#">Terms of Service</a></label>
					<input type="button" id="newUser" value="Join Bucket List!"/>
				</form>
			<button class="activeRegister" id="showRegister">Register</button>
		</div>
	</div>	
</div>

<?php
include("includes/footer.php");
?>