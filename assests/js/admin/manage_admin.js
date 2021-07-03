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
           { data: 'user_firstname' },
           { data: 'user_lastname' },
           { data: 'user_email' },
           { data: 'faculty' },
           { data: 'action' },
        ]
    });
});