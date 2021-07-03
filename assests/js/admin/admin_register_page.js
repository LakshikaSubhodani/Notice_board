$( document ).ready(function() {

    // enable datepiker
    var date = new Date();
    var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

    $('#birth_date').datepicker({
        format: "yyyy-mm-dd",
        todayHighlight: true,
        autoclose: true
    });

    $('#birth_date').datepicker('setDate', today);
});