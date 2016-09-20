<?php
use Cake\Utility\Inflector;

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
    <div class="col-xs-6">
        <h3><strong><?= $title ?></strong></h3>
    </div>
    <div class="col-xs-6">
        <div class="h3 text-right">
            <?php
                echo $this->Html->link(
                    __('Add {0}', $name),
                    $link,
                    ['class' => 'btn btn-primary']
                );
            ?>
        </div>
    </div>
</div>