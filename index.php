<?php
include("includes/head.php");
?>
<div id="sidebar">
	<img src="img/logo.svg"/>
	<form>
		<input type="text" name="search" id="search" placeholder="Search...">
	</form>
	<ul>
		<li>Bucket</li>
		<li>Profile</li>
		<li>Friends</li>
		<li>Milestones</li>
		<li>Completed</li>
		<li>Recomended</li>
	</ul>

</div>
<div class="headerBG"></div>
<div id="container" >
	<div class="row">
		<div class="large-12 medium-12 small-12 page-header">
			<h1>Username's Bucket List</h1>
		</div>
	</div>

	<div class="row">
		<div class="larger-12 bucket-container">
			<div id="bucket-container">
				<div class="icon icon_1"></div>
				<div class="icon icon_2"></div>
				<div class="icon icon_3"></div>
				<div class="icon icon_4"></div>
				<div class="icon icon_5"></div>
				<div class="icon icon_6"></div>
				<div class="icon icon_7"></div>
				<div class="icon icon_8"></div>
				<div class="icon icon_9"></div>
				<div class="icon icon_10"></div>
				<div class="icon icon_11"></div>
				<div class="icon icon_12"></div>
			</div>

		</div>
	</div>
	<input type="button" value="Value TOwns" class="valueTown">
	<div class="row buckets">
	<template id="bucket-item-template">
		<div id='{{ItemID}}' class="large-12 medium-12 small-12 bucket-list-item">

			<div class="large-2 medium-2 small-2 columns bucket-index-container">
				<div class="bucket-index">
					<img class="drag" src="img/drag.png"/>
					<p class="rank-number">{{Rank}}</p>
				</div>
			</div>

			<div class="large-9 medium-9 small-8 columns bucket-text-container">
				<div class=" bucket-list-header">
					<h1 class='list-title'>{{Title}}</h1>
					<p class='list-desc'>{{Desc}}</p>
					<input type="text" class='editable hidden title' value="{{Title}}" />
					<input type="button" class='editable hidden update-button' value="Update"/>
				</div>
			</div>

			<div class="large-1 medium-1 small-2 columns bucket-controller-container">
				<div class="bucket-controller">
					<img class="edit-list-item" id='{{ItemID}}' src="img/cogwheel.png">
				</div>

				<div class="cat-color"></div>
			</div>
		</div>
	</template>
	</div>
</div>

<?php
include("includes/footer.php");
?>