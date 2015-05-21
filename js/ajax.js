$(document).ready(function(){
	var buckets = $('.buckets'),
		toggeContainer,
		listmanagement = $('#listManagement'),
		bucketListAppend = $('#bucket-item-template').html();

		$.ajax({
			url : 'php/getList.php',
			dataType : 'json', 
			
			success: function(data){
				$.each(data, function(i){
					buckets.append(Mustache.render(bucketListAppend, data[i]));
					//console.log(data);
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

			$('.bucket-list-item').each(function(i, v){
				var itemId = $(v).attr('id'),
				indexValue = i+1;

				$.ajax({
					type : 'POST',
					dataType : 'json', 
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
			result_input_desc = $(this).parents('#' + list_id).find("textarea.desc"),
			result_input_remove = $(this).parents('#' + list_id).find("input.remove-button"),
			result_input_btn = $(this).parents('#' + list_id).find("input.update-button");
			result_h1.toggleClass('hidden');
			result_p.toggleClass('hidden');
			result_input_title.toggleClass('hidden');
			result_input_remove.toggleClass('hidden');
			result_input_desc.toggleClass('hidden');
			result_input_btn.toggleClass('hidden');
			
		$('.update-button').click(function(){
			
			var title = $(this).parents('#' + list_id).find('.title').val(),
				desc = $(this).parents('#' + list_id).find('.desc').val();
			
			$.ajax({
				
				type : 'POST',
				dataType : 'json', 
				url : 'php/updateList.php?do=update-title',
				data : {title: title, desc: desc, list_id: list_id},
				
				success: function(data){

					result_h1.toggleClass('hidden');
					result_p.toggleClass('hidden');
					result_input_title.toggleClass('hidden');
					result_input_desc.toggleClass('hidden');
					toggeContainer.removeClass('expand-edit');
				
					buckets.find('#' + list_id).html(Mustache.render(bucketListAppend, data));
							
					list_id = null;
				
				},
				error: function(){
				},
			});
		});
	});

	buckets.delegate('.edit-list-item', 'click', function(){
		toggeContainer = $(this).parents('.bucket-list-item');
		toggeContainer.toggleClass('expand-edit');
	});

	$('#newUser').on('click', function(){

		$.ajax({
			type : 'POST',
			dataType : 'json', 
			url : 'php/userManagement.php?do=add-user',
			data : $('.registerForm').serialize(),
			success: function(data){
				console.log(data);
			},
			error: function(){

			},
		});
	});

	$('#loginButton').on('click', function(){

		$.ajax({
			type : 'POST',
			dataType : 'json', 
			url : 'php/userManagement.php?do=user-login',
			data : $('#loginForm').serialize(),
			success: function(data){
				if(data == 'Password is valid!'){
					window.location.href = 'index.php'
				}else{
					console.log(data);
				}
			},
			error: function(){

			},
		});
	});
});