$(document).ready(function () {
    
        // get documents elements for validate

        const form = document.getElementById("contact_form");
        const enroll= document.getElementById("enrollment");
        const fname = document.getElementById("f_name");
        const lname= document.getElementById("l_name");
        const dob = document.getElementById("db");
        const faculty = document.getElementById("f_aculty");
        const email = document.getElementById("e_mail");
        const password = document.getElementById("p_word");
        const password2 = document.getElementById("c_word");
        const contact = document.getElementById("c_tact");

             // get valus for check patten
             var enrollValue;
             var fnameValue;
             var lnameValue;
             var dobValue;
             var facultyValue;
             var emailValue;
             var passwordValue;
             var password2Value;
             var contactValue;

        
        form.addEventListener('submit',(e)=>{
            e.preventDefault();

            // get valus for check patten
            enrollValue =  enroll.value.trim();
            fnameValue =  fname.value.trim();
            lnameValue =  lname.value.trim();
            dobValue =  dob.value.trim();
            facultyValue = faculty.value.trim();
            emailValue =  email.value.trim();
            passwordValue =  password.value.trim();
            password2Value =  password2.value.trim();
            contactValue =  contact.value.trim();

            if(checkInputs()){

                var formData = {
                    enroll: enrollValue,
                    fname: fnameValue ,
                    lname: lnameValue,
                    contact: contactValue,
                    email: emailValue,
                    dob: dobValue,
                    password: passwordValue,
                    faculty_id: facultyValue,
                  };
                        $.ajax({
                            url : "register_validation",
                            type : "POST",
                            dataType : "json",
                            data : formData,
                            success : function(data) {
                                window.location.replace('index');
                            },
                            error : function(data) {
                                if(data.status == 400){
                                    var jsonobj= $.parseJSON( data.responseText );

                                     if(jsonobj.enroll_id){
                                         setErrorFor(enroll,"Your enrollment number alredy exist");
                                     }
                                }
                            }
                        });        


            }

            
        });

        // validate inputs
        function checkInputs()
        {
            var success = true;

            // validate enrolle numbaer    
            var pattern = /UWU[A-Z]{3}[0-9]{5}/g;
            var res = pattern.test(enrollValue);

            if(!res){
                setErrorFor(enroll,"enrollment number not in valid format");
                success = false;
            }else{
                setSuccessfor(enroll);
            }

            //fname value
            var reg=/\b([A-ZÀ-ÿ][-,a-z. ']+[ ]*)+/gm;
            var res2 = reg.test(fnameValue);
            if(!res2){
                setErrorFor(fname,"First letter should be capital");
                success = false;
            }else{
                setSuccessfor(fname);
            }

            //lname value
            var re=/\b([A-ZÀ-ÿ][-,a-z. ']+[ ]*)+/gm;
            var res3 = re.test(lnameValue);
            if(!res3){
                setErrorFor(lname,"First letter should be capital");
                success = false;
            }else{
                setSuccessfor(lname);

            }

            //dob value
            if(dobValue==''){
                setErrorFor(dob,"date of birthday not be blank");
                success = false;
            }else{
                setSuccessfor(dob);
                
            }

            //email value
            var regx = /(?:[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*|"(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21\x23-\x5b\x5d-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])*")@(?:(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?|\[(?:(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9]))\.){3}(?:(2(5[0-5]|[0-4][0-9])|1[0-9][0-9]|[1-9]?[0-9])|[a-z0-9-]*[a-z0-9]:(?:[\x01-\x08\x0b\x0c\x0e-\x1f\x21-\x5a\x53-\x7f]|\\[\x01-\x09\x0b\x0c\x0e-\x7f])+)\])/;
            var res4 = regx.test(emailValue);
            if(!res4){
                setErrorFor(email,"email address not in valid format");
                success = false;
            }else{
                setSuccessfor(email);
                
            }

            //password
            var r=/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
            var res5 = r.test(passwordValue);
            if(!res5){
                setErrorFor(password,"password must be contain at least eight characters and at least one letter and one number");
                success = false;
            }else{
                setSuccessfor(password);
                
            }

            if(password2Value==''){
                setErrorFor(password2,"should not be a blank ");
                success = false;
            }
            else if(!passwordValue==password2Value){
                setErrorFor(password2,"must equal to password");
                success = false;
            }else{
                setSuccessfor(password2);
            }

            var e=/[0-9]{10}/g;
            var res6 = e.test(contactValue);
            if(!res6){
                setErrorFor(contact,"should be ten digit number");
                success = false;
            }else{
                setSuccessfor(contact);
            }

            return success;

        }

        // set elements error
        function setErrorFor(input,message){

            const reg_info = input.parentElement;
            const small = reg_info.querySelector('small');

            small.innerText=message;
            reg_info.className = 'reg_info error';
        }

        // set element sucess
        function setSuccessfor(input)
        {
            const reg_info = input.parentElement;
            reg_info.className = 'reg_info success';
        }


  });