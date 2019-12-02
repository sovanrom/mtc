$(function () {
	
    $('#user').DataTable({
        pagingType: "full_numbers",
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        autoWidth: false,
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: base_url + 'user/all',
            type: 'POST'
        },
        columns: [
            {data: 'id', visible: false},
            {data: 'username'},
            {data: 'email'},
            {data: 'Actions', searchable: false, orderable: false, width: '1%'}
        ],
        order: [[ 0, "desc" ]]
    });

    var table = $('#user').DataTable();
    
    table.on('click', '.edit', function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            type: 'GET',
            dataType: 'html',
            success: function(html) {
                $('#bean_modal').find('.modal-title').html('Update');
                $('#bean_modal').find('.modal-body').html(html);
                $('#bean_modal').find('#click_submit').html('<i class="fa fa-save"></i>&nbsp; Update');
                $('#bean_modal').modal('show');
            }
        });
    });

    table.on('click', '.change-password', function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            type: 'GET',
            dataType: 'html',
            success: function(html) {
                $('#bean_modal').find('.modal-title').html('Update');
                $('#bean_modal').find('.modal-body').html(html);
                $('#bean_modal').find('#click_submit').html('<i class="fa fa-save"></i>&nbsp; Update');
                $('#bean_modal').modal('show');
            }
        });
    });

     $('#breadcrumb').on('click', "a[rel='add']", function(event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            type: 'GET',
            dataType: 'html',
            success: function(html) {
                $('#bean_modal').find('.modal-title').html('Add New');
                $('#bean_modal').find('.modal-body').html(html);
                $('#bean_modal').find('#click_submit').data("state", "create").html('<i class="fa fa-save"></i>&nbsp; Save');
                $('#bean_modal').modal('show');
            }
        });
    });

    function createUpdate() {
        $.ajax({
            url: $('#form_user').attr('action'),
            type: 'POST',
            dataType: 'json',
            data: new FormData($('#form_user')[0]),
            processData: false,
            contentType: false,
            success: function(response) {
                if(response.status == '1'){
                    $('#bean_modal').modal('hide');
                    $('#user').DataTable().ajax.reload();
                }
            }
        });
    }

    $('#bean_modal').on('click', '#click_submit', function(event) {
        event.preventDefault();
        createUpdate();
    });

    table.on('click', '.user-group', function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            type: 'GET',
            dataType: 'html',
            success: function(html) {
                $('#bean_modal').find('.modal-title').html('User group');
                $('#bean_modal').find('.modal-body').html(html);
                $('#bean_modal').find('#click_submit').html('<i class="fa fa-save"></i>&nbsp; Save');
                $('#bean_modal').modal('show');
            }
        });
    });

    table.on('click', '.remove', function(e) {
        e.preventDefault();
        var url = $(this).attr('href');
        if (confirm("Are you sure?")) {
            $.ajax({
                url: url,
                type: 'POST',
                dataType: 'json',
                success: function(response) {
                    (response.status == '1') ? $('#user').DataTable().ajax.reload() : '';
                }
            });
        }
    });
    
});