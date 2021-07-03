<div id="page-wrapper">
        <div class="container-fluid">
            <!-- Page Heading -->
            <div class="col-sm-12 col-md-12 " id="content">
				<h3 class="newadmin-title">New Admin</h3>
                    <div class="row">
						<div class="col-sm-8 col-sm-offset-2 editor">
                        <?php if(validation_errors()){ ?>  
                            <div class="alert alert-danger alert-dismissible" role="alert">
								<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<?php echo validation_errors(); ?>
							</div>
                            
                        <?php } ?>
                        <form method='post' action='registration' >
                            <div class="row">
								<div class="col-sm-4 col-sm-offset-2">
                                    <div class="form-group">
                                        <label for="firstname">First Name</label>
                                        <input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo set_value('firstname'); ?>" >
							        </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="lastname">Last Name</label>
                                        <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo set_value('lastname'); ?>" >
							        </div>
                                </div>
   
                            </div>
                            <div class="row">
								<div class="col-sm-8 col-sm-offset-2">
                                        <div class="form-group">
											<label for="faculty">Faculty</label>
											<select class="form-control" id="faculty" name="faculty">
												<option value="1" <?php echo set_select('faculty', '1', TRUE); ?> >All Faculties</option>
												<option value="2" <?php echo set_select('faculty', '2'); ?> >Union</option>
												<option value="3" <?php echo set_select('faculty', '3'); ?> >Faculty of Applied Sciences</option>
												<option value="4" <?php echo set_select('faculty', '4'); ?> >Faculty of Management</option>
												<option value="5" <?php echo set_select('faculty', '5'); ?> >Faculty of Animal Science and Export Agriculture</option>
                                                <option value="6" <?php echo set_select('faculty', '6'); ?> >Faculty of Technical Studies</option>
											</select>
										</div> 
                                        <div class="form-group">
											<label for="admin_type">Admin Type</label>
											<select class="form-control" id="admin_type" name="admin_type">
												<option value="Super_Admin" <?php echo set_select('admin_type', 'Super_Admin', TRUE); ?> >Super Admin</option>
												<option value="Union_Admin" <?php echo set_select('admin_type', 'Union_Admin'); ?> >Union Admin</option>
												<option value="Applied_Faculty_Admin" <?php echo set_select('admin_type', 'Applied_Faculty_Admin'); ?> >Applied Faculty Admin</option>
												<option value="Management_Faculty_Admin" <?php echo set_select('admin_type', 'Management_Faculty_Admin'); ?> >Management Faculty Admin</option>
												<option value="Agri_Faculty_Admin" <?php echo set_select('admin_type', 'Agri_Faculty_Admin'); ?> >Agri Faculty Admin</option>
                                                <option value="Technical_Faculty_Admin" <?php echo set_select('admin_type', 'Technical_Faculty_Admin'); ?> >Technical Faculty Admin</option>
											</select>
										</div> 
                                        <div class="form-group">
                                        <label for="birth_date">Date of Birth</label>
                                            <div class="input-group date" >
                                                <input type="text" class="form-control" id="birth_date" name="birth_date" value="<?php echo set_value('birth_date'); ?>" >
                                                    <div class="input-group-addon">
											            <span class="glyphicon glyphicon-th"></span>
										            </div>
                                            </div>
                                        </div>

                                </div>

                            </div>
                            <div class="row">
								<div class="col-sm-8 col-sm-offset-2">
                                    <div class="form-group">
                                        <label for="email" >E-mail</label>
                                        <input type="email" id="email" placeholder="xxxxxxxx@uwu.ac.lk" name="email" class="form-control" value="<?php echo set_value('email'); ?>"  >
                                    </div>
                                    <div class="form-group">
                                        <label for="contact" >Phone Number</label>
                                        <input type="tel" id="contact" name="contact" class="form-control" value="<?php echo set_value('contact'); ?>"  >
                                    </div>
                                </div>
                            </div>
                            <div class="row">
								<div class="col-sm-4 col-sm-offset-2">
                                    <div class="form-group">
                                        <label for="password" >Password</label>
                                        <input type="password" id="password" name="password" class="form-control" >
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label for="con_password">Confirm Password</label>
                                        <input type="password" id="con_password" name="con_password" class="form-control" >
                                    </div>
                                </div>
                            </div>


                            <div class="publish-button">
								<button type="submit" class="btn btn-primary">Register</button>
							</div>	

                        </form>
                        </div>
                    </div>
            </div>
        </div>    
</div>