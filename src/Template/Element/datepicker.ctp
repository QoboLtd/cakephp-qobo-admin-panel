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
<?= $this->Html->script('QoboAdminPanel.datepickers', ['block' => 'scriptBottom']); ?>