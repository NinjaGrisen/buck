$(document).ready(function(){
	var buckets = $('.buckets'),
		toggeContainer,
		listmanagement = $('#listManagement'),
		bucketListAppend = $('#bucket-item-template').html();
		
		$.ajax({
			url : 'php/getList.php',
			dataType : 'json', //text
			
			success: function(data){
				//console.log(data);
				$.each(data, function(i){
					//$('#result').append('<p class="pointer" id="' + data[i].ItemID + '">' + data[i].Title + '</p>');
					buckets.append(Mustache.render(bucketListAppend, data[i]));
					//console.log('Printing out the data.');
				});
			},
			error: function(){
			},
		});

		$('.buckets').sortable({
			handle: ".drag",
			opacity: 0.7,
			revert: false,
			containment: 'parent',


			stop: function(){
			var bucketLength = $('.bucket-list-item').length;
			var settingsValueBajs = 2;
			//console.log('bucketLength' + bucketLength);

			$('.bucket-list-item').each(function(i, v){
				var itemId = $(v).attr('id'),
				indexValue = i+1;

				$.ajax({
					type : 'POST',
					dataType : 'json', //text
					url : 'php/updateList.php?do=update-rank',
					data : {itemId: itemId, indexValue: indexValue},
						
					success: function(data){

					for(var i = 1; i < bucketLength + 1; i++){

						$('.bucket-list-item:nth-child('+ settingsValueBajs +') .rank-number').text(i);
						console.log(i)
						settingsValueBajs++;
					}

					},
					error: function(){
					},
				});

			});
			},
		});

	$('.drag').disableSelection();

	buckets.delegate('.edit-list-item', 'click', function(){
		
		var list_id = $(this).parents('.bucket-list-item').attr('id'),
			result_h1 = $(this).parents('#' + list_id).find("h1.list-title"),
			result_p = $(this).parents('#' + list_id).find("p.list-desc"),
			result_input_title = $(this).parents('#' + list_id).find("input.title"),
			result_input_btn = $(this).parents('#' + list_id).find("input.update-button");
			result_h1.toggleClass('hidden');
			result_p.toggleClass('hidden');
			result_input_title.toggleClass('hidden');
			result_input_btn.toggleClass('hidden');
			//console.log(list_id);
		
		$('.update-button').click(function(){
			
			var title = $(this).parents('#' + list_id).find('.title').val(),
				desc = result_p.text();
				//console.log(title);
			
			$.ajax({
				
				type : 'POST',
				dataType : 'json', //text
				url : 'php/updateList.php?do=update-title',
				data : {title: title, desc: desc, list_id: list_id},
				
				success: function(data){

					result_h1.toggleClass('hidden');
					result_p.toggleClass('hidden');
					result_input.toggleClass('hidden');
					toggeContainer.removeClass('expand-edit');
				
					buckets.find('#' + list_id).html(Mustache.render(bucketListAppend, data));
					//console.log('Printing out the updated data.');
					//console.log('Title: ' + typeof(title));
					list_id = null;
				
				},
				error: function(){
				},
			});
		});
	});
	/*$.ajax({
		url: 'php/listitem.php',
		dataType: 'json',
		success: function(data){
			//console.log(data);
			
			$.each(data, function(i){
				//console.log(data[i].Title);
			//var template = "<h1>{{Title}} </h1><p>{{Desc}}</p><h2>{{Rank}}</h2>";
			// print = Mustache.render(template, data[i]);
				buckets.append(Mustache.render(bucketListAppend, data[i]));
			});
		},
		error: function(data){
		}
	});*/
	buckets.delegate('.edit-list-item', 'click', function(){
			toggeContainer = $(this).parents('.bucket-list-item');
			toggeContainer.toggleClass('expand-edit');
		});
});