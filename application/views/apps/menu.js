$(function () {

    $('input[type="checkbox"]').iCheck();
	
    $('#about').DataTable({
        pagingType: "full_numbers",
        lengthMenu: [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
        responsive: true,
        processing: true,
        serverSide: true,
        ajax: {
            url: base_url + 'about/get_all',
            type: 'POST'
        },
        columns: [
            {data: 'id', visible: false},
            {data: 'type_id'},
            {data: 'description'},
            {
                data: 'status',
                fnCreatedCell: function (nTd, sData, oData, iRow, iCol){
                    (oData.status === '1') ? $(nTd).html('<i class="fa fa-check"></i>') : $(nTd).html('');
                },
                width: '1%'
            },
            {data: 'Actions', searchable: false, orderable: false, width: '1%'}
        ]
    });

    var table = $('#about').DataTable();
    
    table.on('click', '.edit', function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            type: 'GET',
            dataType: 'html',
            success: function(html) {
                $('#bean_modal').find('.modal-title').html('Update');
                $('#bean_modal').find('.modal-body').html(html);
                $('#bean_modal').find('#click_submit').data("state", "update").html('<i class="fa fa-save"></i>&nbsp; Update');
                $('#bean_modal').modal('show');
            }
        });
    });

    $('.content').on('click', "a[rel='add']", function(event) {
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

    function create() {
        $.ajax({
            url: $('#form_about').attr('action'),
            type: 'POST',
            dataType: 'json',
            data: {
                type_id:$('#type_id').val(),
                description  : $('#description').val(),
                // status  : ($('#status').prop('checked')) ? 1 : 0
            },
            success: function(response) {
                if(response.status == '1'){
                    $('#bean_modal').modal('hide');
                    $('#about').DataTable().ajax.reload();
                }
            }
        });
    }

    function update() {
        $.ajax({
            url: $('#form_about').attr('action'),
            type: 'POST',
            dataType: 'json',
            data: {
                type_id:$('#type_id').val(),
                description  : $('#description').val(),
                // status  : ($('#status').prop('checked')) ? 1 : 0
            },
            success: function(response) {
                if(response.status == '1'){
                    $('#bean_modal').modal('hide');
                    $('#about').DataTable().ajax.reload();
                }
            }
        });
    }

    $('#bean_modal').on('click', '#click_submit', function(event) {
        event.preventDefault();
        switch ($(this).data("state")) {
            case 'create':
                create();
                break;
            case 'update':
                update();
                break;
            default:
        }
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
                    (response.status == '1') ? $('#about').DataTable().ajax.reload() : '';
                }
            });
        }
    });


     $('#form_story').on('click', '#save_story', function (event) {
        event.preventDefault();
        $.ajax({
            url: $('#form_story').attr('action'),
            type: 'POST',
            dataType: 'json',
            data: {
                type_id : $('#form_story').find('#type_id').val(),
                description  : $('#form_story').find('#description').val(),
            },
            success: function(response) {
                if(response.status == '1'){
                    $('#bean_modal').modal('hide');
                    $('#about').DataTable().ajax.reload();
                }
            }
        });
    });

    $('#form_commitment').on('click', '#save_commit', function (event) {
        event.preventDefault();
        $.ajax({
            url: $('#form_commitment').attr('action'),
            type: 'POST',
            dataType: 'json',
            data: {
                type_id : $('#form_commitment').find('#type_id').val(),
                description  : $('#form_commitment').find('#description').val(),
            },
            success: function(response) {
                if(response.status == '1'){
                    $('#bean_modal').modal('hide');
                    $('#about').DataTable().ajax.reload();
                }
            }
        });
    });
    $('#form_mission').on('click', '#save_mission', function (event) {
        event.preventDefault();
        $.ajax({
            url: $('#form_mission').attr('action'),
            type: 'POST',
            dataType: 'json',
            data: {
                type_id : $('#form_mission').find('#type_id').val(),
                description  : $('#form_mission').find('#description').val(),
            },
            success: function(response) {
                if(response.status == '1'){
                    $('#bean_modal').modal('hide');
                    $('#about').DataTable().ajax.reload();
                }
            }
        });
    });
 
    $('#form_vision').on('click', '#save_vision', function (event) {
        event.preventDefault();
        $.ajax({
            url: $('#form_vision').attr('action'),
            type: 'POST',
            dataType: 'json',
            data: {
                type_id : $('#form_vision').find('#type_id').val(),
                description  : $('#form_vision').find('#description').val(),
            },
            success: function(response) {
                if(response.status == '1'){
                    $('#bean_modal').modal('hide');
                    $('#about').DataTable().ajax.reload();
                }
            }
        });
    });
    $('#form_resource').on('click', '#save_resource', function (event) {
        event.preventDefault();
        $.ajax({
            url: $('#form_resource').attr('action'),
            type: 'POST',
            dataType: 'json',
            data: {
                type_id : $('#form_resource').find('#type_id').val(),
                description  : $('#form_resource').find('#description').val(),
            },
            success: function(response) {
                if(response.status == '1'){
                    $('#bean_modal').modal('hide');
                    $('#about').DataTable().ajax.reload();
                }
            }
        });
    });
});