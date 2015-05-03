<?php
include("includes/head.php");
?>

<div class="wrapper">
	<div class="splashContent">
		<img src="img/logo.svg"/>
		<p>Make a list of everything you want to experience in life and DO IT!</p>
		<div class="login">
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
			<button>Register</button>
		</div>
	</div>	
</div>


<?php
include("includes/footer.php");
?>