

	<div class="login_center">
		
		
		<h1>Login</h1>
		<?php echo $this->session->flashdata("error"); ?>

		<form action="<?php echo site_url('login/login_validation')?>" method="POST">
				<div class="login_txt_field">
					<input type="text" name="enroll" required>
					<span></span>
						<label>UserName</label>
				</div>

				<div class="login_txt_field">
					<input type="password" name="password" required>
					<span></span>
						<label>Password</label>
				</div>

				<div class="forgot_password">Forgot Password?</div>
					<input type="submit" value="Login">
						<div class="signup_link">
							Don't have an account?
								<a href="<?php echo base_url('login/register')?>">Register</a>
						</div>
		
		
		
			</form>
	
	
	</div>




