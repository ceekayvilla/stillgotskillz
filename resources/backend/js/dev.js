/*data table customisation */
if ($('#dataTableCustom').length) {
    $('#dataTableCustom').DataTable({
        responsive: false,
        stateSave: true,
        "columnDefs": [ {
              "targets": 'no-sort',
              "orderable": false,
        } ]
    });
}
/*data table customisation */