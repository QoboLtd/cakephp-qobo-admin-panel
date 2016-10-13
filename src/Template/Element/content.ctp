<div class="row">
    <?php
        $sidebarContent = trim($this->element('QoboAdminPanel.sidebar'));
        $hasSidebar = '' === $sidebarContent ? false : true;
    ?>
    <div class="<?= $hasSidebar ? 'col-xs-12 col-md-8 col-lg-9' : 'col-xs-12'; ?>">
        <div class="feedback-message">
            <?= $this->Flash->render(); ?>
            <?= $this->Flash->render('auth') ?>
        </div>
        <?= $this->fetch('content') ?>
    </div>
    <div class="<?= $hasSidebar ? 'col-xs-12 col-md-4 col-lg-3' : 'col-xs-12'; ?> right-sidebar">
        <?= $sidebarContent ?>
    </div>
</div>