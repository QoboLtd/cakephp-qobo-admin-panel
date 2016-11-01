
<?php
use Cake\Utility\Inflector;

$elements = [
    'notes' => 'Notes.notes'
];

/**
 * @todo make sidebar better and more dynamic
 */
if ('view' !== $this->request->params['action'] || 'Notes' === $this->request->params['controller'] || 'Search' === $this->request->plugin) {
$elements = [];
}

foreach ($elements as $k => $v) {
    if (!$this->elementExists($v)) {
        unset($elements[$k]);
    }
}
?>

<?php if (!empty($elements)) : ?>

<!-- Sidebar css -->
<?= $this->Html->css('QoboAdminPanel.sidebar'); ?>

<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <?php $count = 0; foreach ($elements as $k => $v) : ?>
    <li role="presentation" class="<?= 0 === $count ? 'active' : '' ?> tab-title-<?= $k ?>">
        <a href="#<?= $k ?>" aria-controls="<?= $k ?>" role="tab" data-toggle="tab">
            <?= Inflector::humanize($k) ?>
        </a>
    </li>
    <?php $count++; endforeach; ?>
</ul>
<!-- Tab panes -->
<div class="tab-content">
    <?php $count = 0; foreach ($elements as $k => $v) : ?>
    <div role="tabpanel" class="tab-pane <?= 0 === $count ? 'active' : ''; ?> tab-content-<?= $k ?>" id="<?= $k ?>">
        <?= $this->element($v) ?>
    </div>
    <?php $count++; endforeach; ?>
</div>
<?php endif; ?>
