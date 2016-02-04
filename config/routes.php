<?php
use Cake\Routing\Router;

Router::plugin(
    'QoboAdminPanel',
    ['path' => '/qobo-admin-panel'],
    function ($routes) {
        $routes->fallbacks('DashedRoute');
    }
);
