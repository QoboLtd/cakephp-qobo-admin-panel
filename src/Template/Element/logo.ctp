<?php
use Cake\Core\Configure;

$logoImageUrl = 'QoboAdminPanel.logo.png';
if (file_exists(WWW_ROOT . 'img' . DS . 'logo.png')) {
    $logoImageUrl = 'logo.png';
}

$url = '/';

if (Configure::check('Admin.panel.url')) {
    $url = Configure::read('Admin.panel.url');
}

echo $this->Html->image($logoImageUrl, [
    'alt' => 'Site Logo',
    'url' => $url,
]);
?>