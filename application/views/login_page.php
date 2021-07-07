<div class="container">

<div class="row">

	<div class="col-lg-5 col-md-6 col-sm-7 login-wrapper">
		<div class="center-block login_center">
			
			
			<h1>Login</h1>
			<span class="text-danger"><?php echo $this->session->flashdata("error"); ?></span>

			<form action="<?php echo site_url('student/login_validation')?>" method="POST">
					<div class="login_txt_field">
						<input type="text" name="enroll" >
						<span class="text-danger"><?php echo form_error('enroll');?></span>
							<label>UserName</label>
					</div>

					<div class="login_txt_field">
						<input type="password" name="password" >
						<span class="text-danger"><?php echo form_error('password');?></span>
							<label>Password</label>
					</div>

					<div class="forgot_password">Forgot Password?</div>
						<input type="submit" value="Login">
							<div class="signup_link">
								Don't have an account?
									<a href="<?php echo base_url('student/register')?>">Register</a>
					</div>

				</form>
		</div>
	</div>
	<div class="col-lg-7 col-md-6 col-sm-5">
		<div class="login-description">	
			<h1>Welcome, <br/> Uva Wellassa University Notice Board</h1>
			<p>Place to share any kinds of information like events, announcements, and news.</p>
			
			<a href="<?php echo base_url('student/register')?>"><p><i class="fa fa-heart" aria-hidden="true"></i> Join with us now !</p></a>
		</div>
	</div>


	</div>
	
</div>
	



