$(document).ready(function(){
	var buckets = $('.buckets'),
		listmanagement = $('#listManagement')
		bucketListAppend = $('#bucket-item-template').html();



	$.ajax({
		url: 'php/listitem.php',
		dataType: 'json',

		success: function(data){
			console.log(data);
			

			$.each(data, function(i){
				console.log(data[i].Title);
			//var template = "<h1>{{Title}} </h1><p>{{Desc}}</p><h2>{{Rank}}</h2>";
			// print = Mustache.render(template, data[i]);
				buckets.append(Mustache.render(bucketListAppend, data[i]));


			});
		},
		error: function(data){

		}
	});

	buckets.delegate('.edit-list-item', 'click', function(){
			$(this).parents('.bucket-list-item').toggleClass('expand-edit');
		});

	//För list.php, list hantering som uppdatering, hämta listor och lägga till.

	$('#getlist').click(function(){

		$('#result').html('');

		$.ajax({
			url : 'php/getList.php',
			dataType : 'json', //text
			
			success: function(data){
				console.log(data);
				$.each(data, function(i){
					$('#result').append('<p class="pointer" id="' + data[i].ItemID + '">' + data[i].Title + '</p>');
					console.log('Printing out the data.');
				});
			},
			error: function(){

			},
		});
	});

	listmanagement.delegate('#result p', 'click', function(){
		var result = $(this).text(),
			list_id = $(this).attr('id');

		$(this).replaceWith('<input id="updated" type="text" value="' + result + '"/> <input id="update" value="Update" type="submit" />');
		console.log('Clicking to change p element.');

		$('#update').click(function(){
			var title = $('#updated').val();

			$.ajax({
				type : 'POST',
				url : 'php/updateList.php',
				data : { title: title, list_id: list_id},
				success: function(data){
					$('#updated').replaceWith('<p class="pointer" id="' + data.ItemID + '">' + data.Title + '</p>');
					$('#update').remove();
					console.log('Printing out the updated data.');
				},
				error: function(){

				},
			});
		});
	});

});