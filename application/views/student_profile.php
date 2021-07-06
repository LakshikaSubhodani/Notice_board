<div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2">
            <div class="center-block login_center">
                <h4>Edit Profile</h4>
                <form action="" method="POST">

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fname">First Name</label>
                                <input type="text" name="fname" id="fname" value="<?php echo $log_user->user_firstname; ?>" class="form-control" >
                                <?php echo form_error('fname', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="lname">Last Name</label>
                                <input type="text" name="lname" id="lname" value="<?php echo $log_user->user_lastname; ?>" class="form-control" >
                                <?php echo form_error('lname', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" id="email" value="<?php echo $log_user->user_email; ?>" class="form-control" >
                                <?php echo form_error('email', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="dob">Date of birth</label>
                                <input type="date" name="dob" id="dob" value="<?php echo $log_user->user_dob; ?>" class="form-control" >
                                <?php echo form_error('dob', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="tel" name="contact" id="contact" value="<?php echo $log_user->user_contact; ?>" class="form-control" >
                                <?php echo form_error('contact', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="old-password">Old Password</label>
                                <input type="password" name="old_password" id="old-password" class="form-control" >
                                <?php echo form_error('old_password', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="new-password">New Password</label>
                                <input type="password" name="new_password" id="new-password" class="form-control" >
                                <?php echo form_error('new_password', '<div class="error">', '</div>'); ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                        
                        </div>
                    </div>

                    
                    <div class="edit-button">
                            <button type="submit" class="btn btn-primary"> Update </button>
                    </div>	

                </form>
            </div>
        </div>
    
    </div>

</div>