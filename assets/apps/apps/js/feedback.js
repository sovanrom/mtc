$(function () {

    $('input[type="checkbox"]').iCheck();
    var table =$('#feedback').DataTable({
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
                url: base_url + 'feedback/get_all',
                type: 'POST'
        },
        columns: [
            {data: 'id', visible: false},
            {data: 'name'},
            {data: 'phone'},
            {data: 'feedback'},
            {data: 'date'},
            {data: 'Actions', searchable: false, orderable: false, width: '1%', bSortable:false}
        ],
        order:[[0, "desc"]]

    });

    if ($('#feedback').data('user') == 2) {
      $('#ordering_menu').hide();
      $('#feedback_menu').hide();
    }

    $('.breadcrumb').hide();

    $('#bean_modal').on('show.bs.modal', function() {
        $(this).find('.modal-footer').hide();
    });


    table.on('click', '.view', function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
            type: 'GET',
            dataType: 'html',
            success: function(html) {
                $('#bean_modal').find('.modal-title').html('View');
                $('#bean_modal').find('.modal-body').html(html);
                $('#bean_modal').modal('show');
            }
        });
    });
});