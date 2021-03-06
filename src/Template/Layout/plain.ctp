<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= h($this->fetch('title')) ?></title>

    <!-- Application's stylesheets -->
    <?= $this->Html->css('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css', ['block' => true]); ?>
    <?= $this->Html->css('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css', ['block' => true]); ?>
    <?= $this->Html->css('QoboAdminPanel.plain', ['block' => true]) ?>
    <?= $this->fetch('css') ?>
</head>
<body>
    <div id="wrapper">

        <div id="page-wrapper">
            <div class="feedback-message">
                <?= $this->Flash->render(); ?>
                <?= $this->Flash->render('auth') ?>
            </div>
            <?= $this->fetch('content') ?>
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- Application's client functionality -->
    <?= $this->Html->script('https://code.jquery.com/jquery-2.1.4.min.js', ['block' => true]); ?>
    <?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js', ['block' => true]); ?>
    <?= $this->fetch('script'); ?>
    <?= $this->fetch('scriptBottom'); ?>
</body>
</html>
