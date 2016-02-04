<?= $this->element('QoboAdminPanel.main-title', ['title' => $this->fetch('title')]); ?>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <?= $this->fetch('panel-title') ?>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <?= $this->fetch('content'); ?>
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->