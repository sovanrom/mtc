$(function () {

    $('input[type="checkbox"]').iCheck();
    var table =$('#order').DataTable({
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
                url: base_url + 'order/get_all',
                type: 'POST'
        },
        columns: [
            {data: 'id', visible: false},
            {data: 'order_name'},
            {data: 'phone'},
            {data: 'code'},
            {data: 'price'},
            {data: 'qty'},
            {data: 'description'},
            {data: 'date'},
            {data: 'status', orderable:false , searchable: false,
                fnCreatedCell: function (nTd, sData, oData, iRow, iCol){
                    (oData.status === '1')? $(nTd).html('<button class="btn btn-danger">Wating confirm</button>') : ''; 
                    (oData.status === '2')? $(nTd).html('<button class="btn btn-success">Confirmed Order</button>') : ''; 
                    (oData.status === '3')? $(nTd).html('<button class="btn btn-warning">Wating Recieve</button>') : ''; 
                    (oData.status === '4')? $(nTd).html('<button class="btn btn-primary">Wating Feedback</button>') : ''; 
                },
            },
            {data: 'actions', searchable: false, orderable: false, width: '1%', bSortable:false}
        ],
        order:[[0, "desc"]]

    });

    table.on('click', '.edit', function(event) {
        event.preventDefault();
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
 
     table.on('click','.change', function(event) {
        event.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            type: 'GET',
            dataType: 'html',
            success: function(html) {
                $('#bean_modal').find('.modal-title').html('Status Update');
                $('#bean_modal').find('.modal-body').html(html);
                $('#bean_modal').find('#click_submit').data("state", "create").html('<i class="fa fa-save"></i>&nbsp; Save');
                $('#bean_modal').modal('show');
            }
        });
    });

      table.on('click','.view', function(event) {
         event.preventDefault();
         $.ajax({
             url: $(this).attr('href'),
             type: 'GET',
             dataType: 'html',
             success: function(html) {
                 $('#bean_modal').find('.modal-title').html('Order info');
                 $('#bean_modal').find('.modal-body').html(html);
                 $('#bean_modal').find('#click_submit').data("state", "create").html('<i class="fa fa-save"></i>&nbsp; Save');
                 $('#bean_modal').modal('show');
                 $('.modal-footer').hide();
             }
         });
     });
   
   $('#bean_modal').on('show.bs.modal', function() {
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
    $('.modal-footer').show();

   });

   function createUpdate() { 
        $.ajax({
            url: $('#form_order').attr('action'),
            type: 'POST',
            dataType: 'json',
           data: new FormData($('#form_order')[0]),
            processData: false,
            contentType: false,
            success: function(response) {
                if (response.status== '1') {
                    $('#bean_modal').modal('hide');
                    $('#order').DataTable().ajax.reload();
                }
            }
        });
    }


    $('#bean_modal').on('click', '#click_submit', function(event) {
        event.preventDefault();
         createUpdate();
       
    });
    
});