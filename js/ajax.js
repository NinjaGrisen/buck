$(document).ready(function(){

	
	$.ajax({
		url: 'php/listitem.php',
		dataType: 'json',

		success: function(data){
			console.log(data);
			$.each(data, function(i){
				console.log(data[i].Title);
			});
		},
		error: function(data){

		}
	});

});