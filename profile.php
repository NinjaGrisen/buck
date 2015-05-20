<?php
include("includes/head.php");
include("includes/sidebar.php");
?>
<div id="container" class="profile-page">
<template class="profile-template">
	<div class="row">
		<div class="large-12 medium-12 small-12 page-header">
			<h1>{{UserName}}'s Bucket List</h1>
		</div>
	</div>
	<div class="row">
		<div class="large-12 medium-12 small-12 columns profile-box">
			<img class="edit-profile" src="img/cogwheel.png">
			<img src="img/profile-placeholder.png" class="profile-picture">
			<table>
				<tr>
					<td class="profile-left">Name</td>
					<td>{{UserName}}</td>
				</tr>
				<tr>
					<td class="profile-left">Email</td>
					<td>{{Mail}}</td>
				</tr>
				<tr>
					<td class="profile-left">Nationality</td>
					<td>{{Country}}</td>
				</tr>
				<tr>
					<td class="profile-left">Date of Birth</td>
					<td>{{Age}}</td>
				</tr>
				<tr>
					<td class="profile-left">Gender</td>
					<td>{{Gender}}</td>
				</tr>
				<tr>
					<td class="profile-left">Bucket List Items</td>
					<td>35</td>
				</tr>
			</table>


			<div class="large-9 columns about-container">
				<p class="about">About MasterOfMusic</p>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed quis consectetur lorem. Nunc ullamcorper nibh id erat rutrum, quis iaculis ligula commodo. Maecenas pharetra erat consequat vulputate commodo. Sed vestibulum massa in sem ultricies posuere. Morbi sed neque eget mauris consequat molestie ut vitae odio. Mauris sapien sem, dictum et enim vel, ultrices finibus massa. Vestibulum vitae elementum magna. Donec a quam non tortor efficitur tempor eu eget leo. Cras ac turpis at nibh congue posuere.</p>
			</div>
		</div>
	</div>
</template>
</div>

<script type="text/javascript">
$(document).ready(function(){
	var profileBox = $('.profile-page'),
	profileTemplate = $('.profile-template').html();
			
	$.ajax({
		url : 'php/userManagement.php?do=get-user',
		dataType : 'json', 
				
		success: function(data){
			console.log(data);
					
			$.each(data, function(i){
						
				profileBox.html(Mustache.render(profileTemplate, data[i]));;
					
			});
					
		},
		error: function(){
			console.log('Something went wrong!');
		},
	});
		
});
</script>
<?php
include("includes/footer.php");
?>