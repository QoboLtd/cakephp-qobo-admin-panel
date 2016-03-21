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