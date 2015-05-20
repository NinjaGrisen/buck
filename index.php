<?php
include("includes/head.php");
?>
<div class="sidebar">
	<img src="img/logo.svg"/>
	<form>
		<input type="text" name="search" id="search" placeholder="Search...">
	</form>
	<ul>
		<li>
			<a href="#">Bucket</a>
		</li>
		<li>
			<a href="#">Profile</a>
		</li>
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

<div class="bucket-container">
	<ul class="filter_icon">
		<li class="icon icon_1"><p>Travel</p></li>
		<li class="icon icon_2"><p>Adventure</p></li>
		<li class="icon icon_3"><p>Experience</p></li>
		<li class="icon icon_4"><p>Learning</p></li>
		<li class="icon icon_5"><p>Career</p></li>
		<li class="icon icon_6"><p>Health</p></li>
		<li class="icon icon_7"><p>Relationships</p></li>
		<li class="icon icon_8"><p>Financial</p></li>
		<li class="icon icon_9"><p>Improvement</p></li>
		<li class="icon icon_10"><p>Milestones</p></li>
		<li class="icon icon_11"><p>Life goals</p></li>
		<li class="icon icon_12"><p>Other</p></li>
	</ul>
</div>
<div class="smallMenu">
	<div class="main-menu">
		<div class="menuContainer">
			<div id="arrow-left" class="menuMain placement" >
				<span></span>
			</div>
		</div>
	</div>
	<p class="menuText">Menu</p>
	<img class="buckLogoSmall" alt="your bucket list" src="img/logoSmall.svg"/>
	<p class="filterText">Filter</p>
	<div class="filter-menu">
		<div class="menuContainer">
			<div id="arrow-right" class="menuFilter placement" >
				<span></span>
			</div>
		</div>
	</div>
</div>

<div class="bigMenu">
	<div class="filter-menu">
		<div class="menuContainer">
			<div id="arrow-right" class="menuFilter placement" >
				<span></span>
			</div>
		</div>
	</div>
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
			

		</div>
	</div>
	<!-- <input type="button" value="Value TOwns" class="valueTown"> -->
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
					<p class='list-desc'>{{Description}}</p>
					<input type="text" class='editable hidden title' value="{{Title}}" />
					<input type="text" class='editable hidden desc' value="{{Description}}" />
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