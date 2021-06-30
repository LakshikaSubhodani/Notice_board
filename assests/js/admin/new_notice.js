$( document ).ready(function() {
    
    // enable datepiker
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

    $('#expire_date').datepicker({
        format: "yyyy-mm-dd",
        todayHighlight: true,
        autoclose: true
    });

    $('#expire_date').datepicker('setDate', today);

    //set upload image previwe

    function readImageURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readImageURL(this);
    }); 

    //set upload file links
    function readFilesURL(input) {
        if (input.files) {

            $.each(input.files, function( index, value ) {
                var filename = '<a href="#">'+value.name+'</a> <br/>';
                $("#insert-attachment").append(filename); 
            });

        }
    }

    $("#filesInp").change(function(){
        readFilesURL(this);
    }); 

    // set link arry

    $("#link_insert_button").click(function(){
       var link =  $("#url_link_model").val();
       var text =  $("#text_link_model").val();

       var ancor = '<a href="'+ link +'" target="_blank" >'+text+'</a> <br/>';
       var field_url = '<input type="hidden" name="links_url[]" value="'+ link +'">';
       var field_text = '<input type="hidden" name="links_text[]" value="'+ text +'">';

       $("#insert-links").append(field_url,field_text, ancor); 

       $('#linksModal').modal('hide');
       $("#text_link_model").val("");
       $("#url_link_model").val("");
    });

});