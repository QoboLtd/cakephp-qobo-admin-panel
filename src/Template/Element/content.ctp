<div class="row">
    <?php
        $sidebarContent = trim($this->element('QoboAdminPanel.sidebar'));
        $hasSidebar = '' === $sidebarContent ? false : true;
    ?>
    <div class="<?= $hasSidebar ? 'col-xs-12 col-md-8 col-lg-9' : 'col-xs-12'; ?> page-content">
        <div class="feedback-message">
            <?= $this->Flash->render(); ?>
            <?= $this->Flash->render('auth') ?>
        </div>
        <?= $this->fetch('content') ?>
    </div>
    <div class="<?= $hasSidebar ? 'col-xs-12 col-md-4 col-lg-3' : 'col-xs-12'; ?> right-sidebar wrapper">
    <?php if($hasSidebar): ?>
        <a href="#" data-toggle="offcanvas" id="sidebar-toggler"><i class="fa fa-angle-double-right fa-2x"></i></a>
        <br/>
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="column sidebar-offcanvas sidebar-collapse" id="sidebar">
                <?= $sidebarContent ?>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
