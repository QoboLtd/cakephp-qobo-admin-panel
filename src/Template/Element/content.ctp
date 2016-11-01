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
        <div class="row row-offcanvas row-offcanvas-left">
            <div class="column sidebar-offcanvas" id="sidebar">
                <?= $sidebarContent ?>
            </div>
        </div>
    </div>
</div>
