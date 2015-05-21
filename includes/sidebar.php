<?php
session_start();
	if(!isset($_SESSION['userSession'])) {
		$userStatus = '<li>' .
			'<a href="profile.php">Profile</a>' .
		'</li>';
	}else{
		$userStatus = '<li>' .
			'<a class="username" href="profile.php?username=' . $_SESSION['userSession'] . '">Profile</a>' .
		'</li>'; 
	}
?>

<div class="sidebar">
	<img src="img/logo.svg"/>
	<form>
		<input type="text" name="search" id="search" placeholder="Search...">
	</form>
	<ul>
		<li>
			<a href="index.php">Bucket</a>
		</li>
		<?php
			 print_r($userStatus);
		?>
		<li>
			<a href="#">Friends</a>
		</li>
		<li>
			<a href="#">Milestones</a>
		</li>
		<li>
			<a href="#">Completed</a>
		</li>
		<li>
			<a href="#">Recomended</a>
		</li>
	</ul>

</div>