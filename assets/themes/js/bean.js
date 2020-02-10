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
        var i=1;
        $('#add').on('click', function(event) {
            event.preventDefault();
            /* Act on the event */
            i++;
            $('#qty').val(i);
        });
        $('#sub').on('click', function(event) {
            event.preventDefault();
            /* Act on the event */
            i--;
            $('#qty').val(i);
        });


    });
        $('#contact').on('click', function(event) {
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

    function create() {
        $.ajax({
            url: $('#feedback_form').attr('action'),
            type: 'POST',
            dataType: 'json',
            data: new FormData($('#feedback_form')[0]),
            processData: false,
            contentType: false,
            success: function(response) {
                if(response.status == '1'){
                    $('#bean_modal').modal('hide');
                    window.location.replace(base_url+'/home');
                }
            }
        });
    }

    function order() {
        $.ajax({
            url: $('#order_form').attr('action'),
            type: 'POST',
            dataType: 'json',
            data: new FormData($('#order_form')[0]),
            processData: false,
            contentType: false,
            success: function(response) {
                if(response.status == '1'){
                    $('#bean_modal').modal('hide');
                    window.location.replace(base_url+'/home');
                }
            }
        });
    }

   $('#bean_modal').on('click', '#submit', function(event) {
        event.preventDefault();
        create();
    });

   $('#bean_modal').on('click', '#submitOrder', function(event) {
        event.preventDefault();
        order();
    });
    $('.click').on('click', function(event) {
        event.preventDefault();
        $.ajax({
                url: base_url+'home/order/'+$(this).data('id'),
                type: 'GET',
                dataType: 'html',
                success: function(html) {
                    $('#bean_modal').find('.modal-title').html('Order');
                    $('#bean_modal').find('.modal-body').html(html);
                    $('#bean_modal').modal('show');
                }
            });
    }); 
    $('#bean_modal').on('click','.order', function(event) {
        event.preventDefault();
        $(this).hide();
        $('#form_order').show();
    });

});
