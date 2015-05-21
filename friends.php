<?php
include("includes/head.php");
include("includes/sidebar.php");
?>
<div id="container">
	<div class="row">
		<div class="large-12 medium-12 small-12 page-header">
			<h1>{{UserName}}'s Friends</h1>
		</div>
	</div>

	<div class="row">
		<div class="large-12 medium-12 small-12 columns friends-box">
			<div class="row">
				<div class="large-2 medium-2 small-2 columns">
					<img src="img/profile-placeholder.png">
				</div>
				<div class="large-9 medium-9 small-9 columns">
					<p class="friends-username">Username</p>
					<p>254 Bucket list items</p>
					<input type="button" class='profile-button' value="Profile"/>
					<input type="button" class='bucket-button' value="Bucket List"/>
				</div>
				<div class="large-1 medium-1 small-1 columns">
					<img src="img/cogwheel.png">
				</div>
			</div>
		</div>
	</div>
</div>

<?php
include("includes/footer.php");
?>