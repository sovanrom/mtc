$(document).ready(function() {
	$(document).on('click', '.description', function(event) {
		event.preventDefault();
		// $('#description').html($(this).attr('href'));
		$.ajax({
			url: base_url+'condition_use/get_descriptionById',
			type: 'POST',
			dataType: 'json',
			data: {
				id: $(this).attr('href')
			},
			success: function (response) {
				$('#description').html(response[0]['description'])
			}
		});
	});
});
