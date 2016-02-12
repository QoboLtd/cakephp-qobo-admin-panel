<?php
use Cake\Core\Configure;
?>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Qobo Admin Panel</a>
    </div>
    <!-- /.navbar-header -->
    <?= $this->element('Menu.menu', ['name' => MENU_SIDEBAR, 'renderAs' => RENDER_AS_LIST]); ?>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <?= $this->element('Menu.menu', ['name' => MENU_TOP, 'renderAs' => RENDER_AS_LIST]); ?>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <!-- /.navbar-static-side -->
</nav>