$(function () {
//Set your options here.
//@link http://eonasdan.github.io/bootstrap-datetimepicker/Options/
//Set the datetime, date, time.

    $('.timepicker').datetimepicker({
        format: 'HH:mm',
    });

    $('.datepicker').datetimepicker({
        format: 'DD/MM/YYYY'
    });

    $('.datetimepicker').datetimepicker({
        format: 'DD/MM/YYYY HH:mm'
    });


});