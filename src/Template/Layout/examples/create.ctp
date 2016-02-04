<?php
$this->extend('QoboAdminPanel./Common/panel-wrapper');
$this->assign('title', __d('QoboAdminPanel', 'Users'));
$this->assign('panel-title', __d('QoboAdminPanel', 'User information'));
?>
<div class="panel-body">
    <?= $this->Form->create('User'); ?>
    <fieldset>
        <legend><?= __d('QoboAdminPanel', 'Add') ?></legend>
        <?php
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('username');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__d('QoboAdminPanel', 'Submit')) ?>
    <?= $this->Form->end() ?>
</div>