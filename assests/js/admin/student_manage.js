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
           { data: 'enrollment_Id' },
           { data: 'user_firstname' },
           { data: 'user_lastname' },
           { data: 'user_email' },
           { data: 'faculty' },
           { data: 'action' },
        ]
    });
});