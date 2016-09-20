<?php
use Cake\Utility\Inflector;
$showDefault = [
    'title' => true,
    'add' => true,
    'back' => false,
];

if (empty($showOptions)) {
    $showOptions = $showDefault;
} else {
    (array) $showOptions += $showDefault;
}
if (empty($title)) {
    $title = ucwords(Inflector::delimit($this->request->params['controller'], ' '));
}

if (empty($name)) {
    $name = Inflector::singularize($this->request->controller);
}

if (empty($link)) {
    $link = ['plugin' => $this->request->plugin, 'controller' => $this->request->controller, 'action' => 'add'];
}
?>
<div class="row">
    <?php if ($showOptions['title']) : ?>
        <div class="col-xs-6">
            <h3><strong><?= $title ?></strong></h3>
        </div>
    <?php endif; ?>
    <?php if ($showOptions['add'] || $showOptions['back']) : ?>
        <div class="col-xs-6">
            <div class="h3 text-right">
            <?php if ($showOptions['add']) : ?>
                <?php
                    echo $this->Html->link(
                        __('Add {0}', $name),
                        $link,
                        ['class' => 'btn btn-primary']
                    );
                ?>
            <?php endif; ?>
            </div>
        </div>
    <?php endif; ?>
</div>