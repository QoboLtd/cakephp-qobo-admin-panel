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
        <?php
            $logoImageUrl = 'QoboAdminPanel.logo.png';
            if (file_exists(WWW_ROOT . 'img' . DS . 'logo.png')) {
                $logoImageUrl = 'logo.png';
            }
            echo $this->Html->image($logoImageUrl, [
                'alt' => 'Site Logo',
                'url' => '#'
            ]);
        ?>
    </div>
    <!-- /.navbar-header -->
    <?= $this->element(
        'Menu.menu',
        [
            'name' => MENU_TOP,
            'renderAs' => [
                'menuStart' => '<ul class="nav navbar-top-links navbar-right">',
                'childMenuStart' => '<ul class="dropdown-menu">',
                'itemStart' => '<li class="dropdown">',
                'item' => '<a href="%url%"><i class="fa fa-%icon%"></i> %label%</a>',
                'itemWithChildren' => '<a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="fa fa-%icon%"></i> %label% <i class="fa fa-caret-down"></i></a>',
            ]
        ]);
    ?>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <?= $this->element(
                'Menu.menu',
                [
                    'name' => MENU_SIDEBAR,
                    'renderAs' => [
                        'menuStart' => '<ul class="nav metismenu">',
                        'childMenuStart' => '<ul class="nav nav-second-level collapse">',
                        'item' => '<a href="%url%"><i class="fa fa-%icon%"></i> %label%</a>',
                        'itemWithChildren' => '<a href="%url%"><i class="fa fa-%icon%"></i> %label% <span class="fa arrow"></span></a>',
                    ]
                ]);
            ?>
        </div>
        <!-- /.sidebar-collapse -->
    </div>
    <ul class="nav navbar-top-links navbar-right">
        <?= $this->element('QoboAdminPanel.messages'); ?>
    </ul>
    <?= $this->element('QoboAdminPanel.search'); ?>
    <!-- /.navbar-static-side -->
</nav>