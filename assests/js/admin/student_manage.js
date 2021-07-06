$(document).ready(function() {
    // DataTable initialisation
	//$('#manage-student-table').DataTable();

    $('#manage-student-table').DataTable({
        'processing': true,
        'serverSide': true,
        'serverMethod': 'post',
        'ajax': {
           'url':'get_studentlist'
        },
        'columns': [
            { data: 'user_Id' },
           { data: 'enrollment_Id' },
           { data: 'user_firstname' },
           { data: 'user_lastname' },
           { data: 'user_email' },
           { data: 'faculty' },
           { data: 'action' },
        ]
    });

    // data table delete button click
   $('#manage-student-table tbody').on('click', 'td button.dt-delete', function (){

    var student_id = $(this).data().studentid;
    $('#studentidinput').val(student_id);
    $('#student_list_delete').modal('show');

    });  
});