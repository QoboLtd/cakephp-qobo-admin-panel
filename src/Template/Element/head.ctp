<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title><?= h($this->fetch('title')) ?></title>

<!-- Application's stylesheets -->
<?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css', ['block' => true]); ?>
<?= $this->Html->css('QoboAdminPanel.bootstrap-datetimepicker', ['block' => true]); ?>
<?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css', ['block' => true]); ?>
<?= $this->Html->css('QoboAdminPanel.metisMenu.min', ['block' => true]); ?>
<?= $this->Html->css('QoboAdminPanel.timeline', ['block' => true]) ?>
<?= $this->Html->css('QoboAdminPanel.sb-admin-2', ['block' => true]) ?>
<?= $this->Html->css('QoboAdminPanel.custom', ['block' => true]) ?>
<?= $this->fetch('css') ?>
<?= $this->fetch('cssBottom') ?>