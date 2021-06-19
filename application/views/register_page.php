
    <body>
        <div class="container">
            <div class="regform">
                <div><h1>Rgistration Form</h1></div>

                <?php echo validation_errors(); ?>
                <?php 
                $attributes = array('id' => 'contact_form');
                echo form_open('login/register_validation',$attributes); 
                ?>
                
                    <div id="reg_entno" class="reg_info ">
                        <label for="entrollment_no" class="reg_label">Entrollment Number :</label>
                        <input type="text" id="enrollment" placeholder="UWUCST18070"  name="enroll"  quid>
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                        <?php echo form_error('enroll'); ?>
                        <br><br>
                    </div>
                    <div id="reg_fname" class="reg_info"  >
                        <label for="name_initials" class="reg_label">First Name :</label>
                        <input type="text" id="f_name" placeholder="Amasha" name="fname" quid>
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                        <br><br>
                    </div>
                    <div id="reg_lname" class="reg_info">
                        <label for="full_name" class="reg_label"> Last Name :</label>
                        <input type="text" id="l_name" placeholder="Perera"  name="lname" quid>
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                        <br><br>
                    </div>
                    <div id="reg_dob" class="reg_info">
                        <label for="dob" class="reg_label">Date of Birth</label>
                        <input type="date" id="db" name="dob"  quid>
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                        <br><br>
                    </div>
                    <div id="reg_faculty" class="reg_info">
                        <label for="faculty" class="reg_label">Faculty :</label>
                        <select name="faculty_id" id="f_aculty" quid>
                            <option value="5" >Faculty of Animal Science and Export Agricultu</option>
                            <option value="3" >Faculty of Applied Sciences</option>
                            <option value="4" >Faculty of Management</option>
                            <option value="6" >Faculty of Technological Studies</option>
                            

                        </select>
                        
                        <br><br>
                    </div>
                    <div id="reg_email" class="reg_info">
                        <label for="email" class="reg_label">E-mail :</label>
                        <input type="email" id="e_mail" placeholder="xxxxxxxx@std.uwu.ac.lk" name="email"  quid>
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                        <br><br>
                    </div>
                    <div id="reg_pwd" class="reg_info">
                        <label for="password" class="reg_label">Password :</label>
                        <input type="password" id="p_word" name="password"  quid>
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>    
                        <br><br>
                    </div>
                    <div id="reg_conpwd" class="reg_info">
                        <label for="con_password" class="reg_label" >Confirm Password :</label>
                        <input type="password" id="c_word" name="passwordagain"  quid>
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                        <br><br>
                    </div>

                    <div id="reg_pno" class="reg_info">
                        <label for="phone_no"class="reg_label" >Phone Number :</label>
                        <input type="tel" id="c_tact" name="contact"  quid>
                        <i class="fas fa-check-circle"></i>
                        <i class="fas fa-exclamation-circle"></i>
                        <small>Error message</small>
                        <br><br>
                    </div> 
                    <!--success message-->
            

                    <div id="reg_submit" class="reg_info"> 
                    <button type="submit"  >Submit </button>          
                    </div>

                
               </form>   

            </div>
        </div> 
 
        
  


