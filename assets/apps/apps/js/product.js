$(function () {

    $('input[type="checkbox"]').iCheck();
    var table =$('#product').DataTable({
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
                url: base_url + 'product/get_all',
                type: 'POST'
        },
        columns: [
            {data: 'id', visible: false},
            {data: 'code'},
            {data: 'name'},
            {data: 'price'},
            {data: 'category_id'},
            {data: 'description'},
            {data: 'active', orderable: false, searchable: false, width: '1%', 'className':'text-center',
                fnCreatedCell: function (nTd, sData, oData, iRow, iCol){
                    (oData.active === '1')? $(nTd).html('<a class="btn btn-success">posting</a>') : ''; 
                    (oData.active === '0')? $(nTd).html('<a class="btn btn-primary">pending post</a>') : ''; 
                },
            },
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

     if ($('#product').data('user') == 2) {
       $('#ordering_menu').hide();
       $('#feedback_menu').hide();
     }

   function createUpdate() {      
        $.ajax({
            url: $('#form_product').attr('action'),
            type: 'POST',
            dataType: 'json',
           data: new FormData($('#form_product')[0]),
            processData: false,
            contentType: false,
            success: function(response) {
                if (response== '1') {
                    $('#bean_modal').modal('hide');
                    $('#product').DataTable().ajax.reload();
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
                    (response.status == '1') ? $('#product').DataTable().ajax.reload() : '';
                }
            });
        }
    });
});