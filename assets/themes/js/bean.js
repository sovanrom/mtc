$(document).ready(function() {
	$('#about').on('click', function(event) {
		event.preventDefault();
		$.ajax({
            url: $(this).attr('href'),
            type: 'GET',
            dataType: 'html',
            success: function(html) {
                $('#bean_modal').find('.modal-title').html('');
                $('#bean_modal').find('.modal-body').html(html);
                $('#bean_modal').modal('show');
            }
        });
	});
    $('#bean_modal').on('show.bs.modal', function() {
        $('.modal-footer').hide();

    });
});
