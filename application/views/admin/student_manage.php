<div class="admin-content">
    <a href="<?php echo base_url()?>admin/managestudent"><h4 ><i class="fa fa-fw fa-group (alias)"></i>Student Management</h4></a>
    <hr/>

    <div class="col-sm-12 col-md-12 ">
      <table id="manage-student-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th>Studnt ID</th>
          <th>Enrollment ID</th>
          <th>First Name</th>
          <th>Last Name</th>
          <th>Email</th>
          <th>Faculty</th>
          <th>Action</th>
        </tr>
      </thead>
     </table>
    </div>

</div>


<!-- Modal delete -->
<div class="modal fade" id="student_list_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Are you sure !</h4>
      </div>
      <div class="modal-body">
        <p>Delete notice. Do you want to continue ?</p>
      </div>
      <div class="modal-footer">
		<form action="deletestudent" method="post" >
		    <input type="text" name="studentid" id="studentidinput"  hidden>	
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Delete</button>
		</form>
        
      </div>
    </div>
  </div>
</div>