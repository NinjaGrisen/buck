<?php
session_start();

include("includes/head.php");
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
					<select class="bday">
						<option value="nooption">Year</option>
						<option class="regForm" value="1992">1992</option>
					</select>
					<select class="bday">
						<option value="nooption">Month</option>
						<option class="regForm" value="1992">08</option>
					</select>
					<select class="bday">
						<option value="nooption">Day</option>
						<option value="1992">02</option>
					</select>
					<select class="gender" name="gender">
						<option value="male">Male</option>
						<option value="female">Female</option>
					</select>
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