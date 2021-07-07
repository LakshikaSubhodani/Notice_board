<div class="admin-content">
    <a href="<?php echo base_url()?>admin/noticelist"><h4 ><span class="glyphicon glyphicon-list" aria-hidden="true"></span> Notice List</h4></a>
    <hr/>

    <div class="col-sm-12 col-md-12 ">
    <table id="notice-list-table" class="table table-striped table-bordered" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>Notice Id</th>
			<th>Title</th>
			<th>Date</th>
			<th>Type</th>
			<th>Action</th>
		</tr>
	</thead>

</table>
</div>

</div>

<!-- Modal delete -->
<div class="modal fade" id="notice_list_delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
		<form action="deletenotice" method="post" >
		    <input type="text" name="noticeid" id="noticeidinput"  hidden>	
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary">Delete</button>
		</form>
        
      </div>
    </div>
  </div>
</div>

<!-- Modal update -->
<div class="modal fade" id="notice_list_update" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Notice</h4>
      </div>
      <div class="modal-body">
        <form method='post' action='updatenotice' >
              <div class="form-group">
								<label for="title">Title</label>
								<input type="text" name="notice_update_title" id="title" class="form-control" >
							</div>
              <div class="form-group">
								<label for="content">Content</label>
								<textarea class="form-control" rows="8" id="content" name="notice_update_content"></textarea>
							</div>   
      </div>
      <input type="text" name="noticeid" id="noticeidinput" hidden >	
      <div class="modal-footer">
		  
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-success">Update</button>
		</form>
        
      </div>
    </div>
  </div>
</div>
