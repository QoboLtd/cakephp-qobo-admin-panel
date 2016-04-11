<?php
if (!isset($options)) {
    return false;
}

if (!is_array($options)) {
    $fieldName = $options;
    $options = [];
    $options['fieldName'] = $fieldName;
}
$options += ['fieldName' => null, 'icon' =>'calendar', 'type' => 'datepicker'];

// We do not proceed without the fieldName.
if (is_null($options['fieldName'])) {
    return false;
}

extract($options);
?>
<div class="form-group">
    <div class='input-group date <?= $type ?>'>
        <input type='text' class="form-control" name="<?= $fieldName ?>" />
        <?php if ($icon) : ?>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-<?= $icon ?>"></span>
            </span>
        <?php endif; ?>
    </div>
</div>