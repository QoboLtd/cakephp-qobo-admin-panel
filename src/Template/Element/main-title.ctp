<?php
use Cake\Utility\Inflector;

if (empty($title)) {
    $title = ucwords(Inflector::delimit($this->request->params['controller'], ' '));
}
?>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header"><?= $title ?></h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
