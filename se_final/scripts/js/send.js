$('#form_input').submit(function(){
	var message=$('#message').val();
	var sender=$('#sender').html();
	
	$.ajax({
		url:'scripts/php/send.php',
		data: {sender:sender, message: message},
		success: function(data){
			$('#feedback').html(data);
				$('#feedback').fadeIn('slow',function(){
					$('#feedback').fadeOut(5000);
				});
		}
	});
	return false;
});