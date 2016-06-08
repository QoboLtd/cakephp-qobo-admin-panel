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
        <?= $this->element('QoboAdminPanel.logo'); ?>
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
        <?php
        $unreadMessagesElement = 'MessagingCenter.unread_messages';
        if ($this->elementExists($unreadMessagesElement)) {
            echo $this->element($unreadMessagesElement);
        } ?>
    </ul>
    <?php
        $searchFormElement = 'Search.basic_search';
        if ($this->elementExists($searchFormElement) && Configure::read('Admin.search')) {
            echo $this->element($searchFormElement);
        }
    ?>
    <!-- /.navbar-static-side -->
</nav>