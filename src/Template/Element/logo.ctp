<?php
use Cake\Core\Configure;
use \Cake\Core\Plugin;

$path = Plugin::path('QoboAdminPanel') . DS . 'webroot' . DS . 'img' . DS . 'logo.png';
if (file_exists(WWW_ROOT . 'img' . DS . 'logo.png')) {
    $path = WWW_ROOT . 'img' . DS . 'logo.png';
}

// convert to base64 image
$data = file_get_contents($path);
$base64 = 'data:image/png;base64,' . base64_encode($data);
$logoImageUrl = 'logo.png';

$url = '/';
if (Configure::check('Admin.panel.url')) {
    $url = Configure::read('Admin.panel.url');
}
?>

<a href="<?= $this->Url->build($url, ['fullBase' => true]); ?>">
    <img src="<?= $base64; ?>" alt="Site Logo" />
</a>