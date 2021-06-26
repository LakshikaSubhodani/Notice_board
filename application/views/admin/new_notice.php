<div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="row" id="main" >
                <div class="col-sm-12 col-md-12 well" id="content">
                    <h1 id="scn_h1">Create notice!</h1>
					<div id="super_create_notice">
					<?php echo $this->session->flashdata("status"); ?>
        				<div id="scn_form">
						<?php echo form_open_multipart('admin/set_newnotice');?>
                				<div id="scn_upload_notice">
									<label id="scn_title" class="scn_label">Title</label>
									<input type="text" placeholder="Title" name="title" >
									<span class="text-danger"><?php echo form_error('title');?></span>
									<br><br>

									<label id="scn_notice_type" >Notice type</label>
									<input type="text" placeholder="Type" name="type" >
									<span class="text-danger"><?php echo form_error('type');?></span>
									<br><br>

									<label id="scn_description" class="scn_label">Description</label>
									<textarea id="scn_desc_ta" name="description" ></textarea>
									<span class="text-danger"><?php echo form_error('description');?></span>
									<br><br><br>

									<div id="scn_doc">	
										<label id="scn_doc1" class="scn_label">Uplod files</label><br><br>
										<input type="file" id="files" name="files" ><br><br>
										<small><?php if(isset($error)){echo $error;} ?></small>
									</div>
									

									<div id="reg_dob" class="reg_info">
											<label for="dob" class="reg_label">expire date</label>
											<input type="date" id="db"  name="expiredate" >
											<span class="text-danger"><?php echo form_error('expiredate');?></span>
											<br><br>
                   					</div>   

								</div>	

								<input id="scn_upload_notice_submit" type="submit"  value="Create">
								<input id="scn_upload_notice_cancel" type="submit"  value="Cancel">
           					 </form>
       					 </div>
    				</div>  

 
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
</div><!-- /#wrapper -->