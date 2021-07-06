$(document).ready(function() {
     // DataTable initialisation
	//$('#manage-student-table').DataTable();

    $('#manage-admin-table').DataTable({
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'ajax': {
           'url':'get_adminlist'
        },
        'columns': [
            {data: 'user_Id'},
           { data: 'user_firstname' },
           { data: 'user_lastname' },
           { data: 'user_email' },
           { data: 'faculty' },
           { data: 'action' },
        ]
    });

     // data table delete button click
   $('#manage-admin-table tbody').on('click', 'td button.dt-delete', function (){

    var admin_id = $(this).data().adminid;
    $('#adminidinput').val(admin_id);
    $('#admin_list_delete').modal('show');

    });  
});