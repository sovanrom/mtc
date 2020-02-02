$(function () {

    $('input[type="checkbox"]').iCheck();
    var table =$('#about').DataTable({
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
                url: base_url + 'about/get_all',
                type: 'POST'
        },
        columns: [
            {data: 'id', visible: false},
            {data: 'name'},
            {data: 'description'},
            {data: 'Actions', searchable: false, orderable: false, width: '1%', bSortable:false}
        ],
        order:[[0, "desc"]]

    });

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
 
     $('#breadcrumb').on('click', "a[rel='add']", function(event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            type: 'GET',
            dataType: 'html',
            success: function(html) {
                $('#bean_modal').find('.modal-title').html('Create New Menu');
                $('#bean_modal').find('.modal-body').html(html);
                $('#bean_modal').find('#click_submit').data("state", "create").html('<i class="fa fa-save"></i>&nbsp; Save');
                $('#bean_modal').modal('show');
            }
        });
    });

   
   function createUpdate() {      
        $.ajax({
            url: $('#form_about').attr('action'),
            type: 'POST',
            dataType: 'json',
           data: new FormData($('#form_about')[0]),
            processData: false,
            contentType: false,
            success: function(response) {
                if (response== '1') {
                    $('#bean_modal').modal('hide');
                    $('#about').DataTable().ajax.reload();
                }
            }
        });
    }


    $('#bean_modal').on('click', '#click_submit', function(event) {
        event.preventDefault();
         createUpdate();
       
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
});