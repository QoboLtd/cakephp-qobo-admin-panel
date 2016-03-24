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
$(function () {
    $('#{$datepickerId}').datetimepicker({
        //Set your options here.
        //@link
    });
});
EOT;
echo $string;
$this->Html->scriptEnd();