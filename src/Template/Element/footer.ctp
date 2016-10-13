<!-- Application's client functionality -->
<?= $this->Html->script('https://code.jquery.com/jquery-2.1.4.min.js', ['block' => true]); ?>
<?= $this->Html->script('https://code.jquery.com/ui/1.11.4/jquery-ui.min.js', ['block' => true]) ?>
<?= $this->Html->script('QoboAdminPanel.moment.min', ['block' => true]); ?>
<?= $this->Html->script('QoboAdminPanel.momentConfig', ['block' => true]); ?>
<?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', ['block' => true]); ?>
<?= $this->Html->script('QoboAdminPanel.bootstrap-datetimepicker', ['block' => true]); ?>
<?= $this->Html->script('QoboAdminPanel.datepickers', ['block' => true]); ?>
<?= $this->Html->script('QoboAdminPanel.metisMenu.min', ['block' => true]); ?>
<?= $this->Html->script('QoboAdminPanel.sb-admin-2', ['block' => true]); ?>
<?= $this->fetch('script'); ?>
<?= $this->fetch('scriptBottom'); ?>