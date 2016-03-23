<?php
$datepickerId = isset($datepickerId) ? $datepickerId : 'datepicker' . rand();
?>
<div class="form-group">
    <div class='input-group date' id='<?= $datepickerId ?>'>
        <input type='text' class="form-control" />
        <span class="input-group-addon">
            <span class="glyphicon glyphicon-calendar"></span>
        </span>
    </div>
</div>
<?php
$this->Html->scriptStart(['block' => 'scriptBottom']);
$string = <<< EOT
//In order to change the first day of the week you have to
//override moment locale files.
//@link: https://github.com/Eonasdan/bootstrap-datetimepicker/issues/1030
moment.locale('en', {
    week : {
        dow : 1, // Monday is the first day of the week.
        doy : 4  // The week that contains Jan 4th is the first week of the year.
    }
});
$(function () {
    $('#{$datepickerId}').datetimepicker({
        //Set your options here.
        //@link
    });
});
EOT;
echo $string;
$this->Html->scriptEnd();