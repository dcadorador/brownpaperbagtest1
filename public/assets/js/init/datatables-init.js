(function ($) {
    //    "use strict";


    let integration_table = $('#bootstrap-data-table').DataTable({
        searching: false,
        paging: false,
        columnDefs: [
            {
                "targets": 2,
                "className": "text-center",
            },
            {
                "targets": 3,
                "className": "text-center",
            }
        ]
    });


    integration_table.on('click', '.action-btn', function() {
        window.location = $(this).attr('data-url');
    });

    $('#sync-status').on('click', '.enable-action-btn', function() {
        window.location = '/dashboard/sync/update?status=1'
    });

    $('#sync-status').on('click', '.disable-action-btn', function() {
        window.location = '/dashboard/sync/update?status=0'
    })




})(jQuery);
