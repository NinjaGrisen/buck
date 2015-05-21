<?php
include("includes/head.php");
include("includes/sidebar.php");
?>


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

	<div class="row">
		<div class="large-12 medium-12 small-12 add-bucket-item">
			<p class="add-heading">Add bucket list item</p>
			<input type="text" class="add-title" name="add-title" placeholder="Title">
			<select class="add-category">
				<option>Choose Category...</option>
				<option>Travel</option>
				<option>Adventure</option>
				<option>Experience</option>
				<option>Learning</option>
				<option>Career</option>
				<option>Health</option>
				<option>Relationships</option>
				<option>Financial</option>
				<option>Improvement</option>
				<option>Milestones</option>
				<option>Life Goals</option>
				<option>Other</option>
			</select>
			<textarea class="add-desc" placeholder="Description"></textarea>
			<input type="button" class='add-button' value="Add Item"/>
		</div>
	</div>

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
					<select class="change-category hidden editable">
						<option>Travel</option>
						<option>Adventure</option>
						<option>Experience</option>
						<option>Learning</option>
						<option>Career</option>
						<option>Health</option>
						<option>Relationships</option>
						<option>Financial</option>
						<option>Improvement</option>
						<option>Milestones</option>
						<option>Life Goals</option>
						<option>Other</option>
					</select>
					<input type="text" class='editable hidden title' value="{{Title}}"/>
					<br>
					<textarea class='editable hidden desc'>{{Description}}</textarea>
					<br>
					<input type="button" class='editable hidden update-button' value="Update"/>
					<input type="button" class='editable hidden complete-button' value="Completed"/>
					<input type="button" class='editable hidden remove-button' value="Remove"/>
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