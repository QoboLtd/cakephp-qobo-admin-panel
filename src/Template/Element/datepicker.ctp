<?php
if (!isset($options)) {
    return false;
}

if (!is_array($options)) {
    $fieldName = $options;
    $options = [];
    $options['fieldName'] = $fieldName;
}
$options += ['fieldName' => null, 'groupAddon' =>'calendar', 'type' => 'datepicker'];

// We do not proceed without the fieldName.
if (is_null($options['fieldName'])) {
    return false;
}

extract($options);
?>
<div class="form-group">
    <div class='input-group date <?= $type ?>'>
        <input type='text' class="form-control" name="<?= $fieldName ?>" />
        <?php if ($groupAddon) : ?>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-<?= $groupAddon ?>"></span>
            </span>
        <?php endif; ?>
    </div>
</div>
<?= $this->Html->script('QoboAdminPanel.datepickers', ['block' => 'scriptBottom']); ?>