<?php
if (!isset($options)) {
    return false;
}

if (!is_array($options)) {
    $fieldName = $options;
    $options = [];
    $options['fieldName'] = $fieldName;
}
$options += [
    'fieldName' => null,
    'icon' =>'calendar',
    'type' => 'datepicker',
    'label' => false,
    'required' => false,
    'value' => null
];

// We do not proceed without the fieldName.
if (is_null($options['fieldName'])) {
    return false;
}

extract($options);
$required = $required ? 'required="required"': '';
?>
<div class="form-group">
    <?php if ($label) : ?>
        <?= $this->Form->label($fieldName); ?>
    <?php endif; ?>
    <div class='input-group date <?= $type ?>'>
        <?= $this->Form->input($fieldName, ['label' => false, 'type' => 'text', 'value' => $value, 'required' => $required]) ?>
        <?php if ($icon) : ?>
            <span class="input-group-addon">
                <span class="glyphicon glyphicon-<?= $icon ?>"></span>
            </span>
        <?php endif; ?>
    </div>
</div>
