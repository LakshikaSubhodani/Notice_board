$(document).ready(function() {


    // DataTable initialisation
	//$('#notice-list-table').DataTable();

    $('#notice-list-table').DataTable({
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'ajax': {
           'url':'get_noticelist'
        },
        'columns': [
           { data: 'notice_Id' },
           { data: 'title' },
           { data: 'update_date' },
           { data: 'notice_type' },
           { data: 'action' },
        ]
      });

   // data table button click
   $('#notice-list-table tbody').on('click', 'td button.dt-delete', function (){

      var notice_id = $(this).data().noticeid;
      $('#noticeidinput').val(notice_id);
      $('#notice_list_delete').modal('show');

   });  
  
  //data table update button click
   $('#notice-list-table tbody').on('click', 'td button.dt-update', function (){

      var notice_id = $(this).data().noticeid;
      $('#notice_list_update #noticeidinput').val(notice_id);

      var formData = {
         noticeid: notice_id,
       };

         $.ajax({
            url : "updatenotice",
            type : "POST",
            dataType : "json",
            data : formData,
            success : function(data) {
               $('#notice_list_update #title').val(data.title);
               $('#notice_list_update #content').val(data.discription);
               $('#notice_list_update #noticeidinput').val(data.notice_Id);
            },
            error : function(data) {
              
            }
         });        

      $('#notice_list_update').modal('show');
   
   });

});

