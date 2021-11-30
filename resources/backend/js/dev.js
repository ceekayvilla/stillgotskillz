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

  $("#dob").datepicker({
    dateFormat: 'yy-mm-dd',
    yearRange: '-25:-21',
    changeMonth: true,
    changeYear: true,
    defaultDate: "-25Y",
  });

/*magnify images*/
$(document).ready(function(){
    $(function(){ // on DOM Load
        $('.thumbnails').fullscreenimage({
         scale: 3 // magnify by 3 times when mouse moves over full screen image (set to 1 to disable)
            })
    });
})

