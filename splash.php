<?php
include("includes/head.php");
?>

<div class="wrapper">
	<div class="splashContent">
		<img class="buckSplash" src="img/logo.svg"/>
		<p class="activeRegister">Make a list of everything you want to experience in life and DO IT!</p>
		<div class="login activeRegister">
		<p>Login</p>
		<form>
			<input type="text" placeholder="Username"/>
			<input type="password" placeholder="Password"/>
			<input type="submit" value="Log in"/>
			<input type="checkbox"/>
			<label>Remember me</label>
			<a href="#">Forgot password?</a>
		</form>
		</div>
		<div class="register">
			<p>New to Bucket List?</p>
			<form class="registerForm">
				<input type="text" placeholder="Username"/>
				<input type="text" placeholder="Email"/>
				<select class="bday">
					<option value="nooption">Year</option>
					<option value="1992">1992</option>
				</select>
				<select class="bday">
					<option value="nooption">Month</option>
					<option value="1992">Aug</option>
				</select>
				<select class="bday">
					<option value="nooption">Day</option>
					<option value="1992">02</option>
				</select>
				<select class="gender">
					<option value="male">Male</option>
					<option value="female">Female</option>
				</select>
				<input type="password" placeholder="Password"/>
				<input type="Password" placeholder="Repeat Password"/>
				<input type="submit" value="Join Bucket List!"/>
			</form>
			<button class="activeRegister"id="showResiter">Register</button>
		</div>
	</div>	
</div>

<?php
include("includes/footer.php");
?>