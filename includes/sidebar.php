<?php
session_start();
	if(!isset($_SESSION['userSession'])) {
		$userStatus = '';
	}else{
		$userStatus = '<li>' .
			'<a class="username" href="profile.php?username=' . $_SESSION['userSession'] . '">Profile</a>' .
		'</li>'.
		'<li>' .
			'<a href="friends.php">Friends</a>' .
		'</li>' .
		'<li>' .
			'<a href="#">Milestones</a>' .
		'</li>' .
		'<li>' .
			'<a href="#">Completed</a>' .
		'</li>' .
		'<li>' .
			'<a href="#">Recomended</a>' .
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
	</ul>

</div>