$(document).ready(function(){
	var buckets = $('.buckets'),
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

});