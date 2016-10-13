<?php
use Cake\Core\Configure;
use Cake\Event\EventManager;
use QoboAdminPanel\Event\Layout\LayoutListener;

//Load optionally features of the admin panel
if (!Configure::check('Admin.search')) {
    Configure::write('Admin.search', true);
}

EventManager::instance()->on(new LayoutListener());
