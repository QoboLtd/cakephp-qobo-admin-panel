# QoboAdminPanel plugin for CakePHP 3

The plugin comes with one layout which is based on Start Bootstrap - SB Admin 2 Bootstrap Admin Theme (https://github.com/BlackrockDigital/startbootstrap-sb-admin-2).

## Setup

Install plugin
```
composer require qobo/cakephp-qobo-admin-panel
```
Load plugin

```
bin/cake plugin load QoboAdminPanel
```

## Requirements

Load the the required plugins in your application.

```php
Plugin::load('Menu', ['bootstrap' => true]);
Plugin::load('BootstrapUI');
```

## AppView should look like the following:

```php

namespace App\View;
use BootstrapUI\View\UIView;
class AppView extends UIView
{
    //Loads Admin panel layout 
    public $layout = 'QoboAdminPanel.basic';

    public function initialize()
    {
        parent::initialize();
        //Loads the helper for building Menus
        $this->loadHelper('Menu.Menu');
    }
}
```

## Examples

Examples can be found [here](https://github.com/QoboLtd/cakephp-qobo-admin-panel/tree/master/src/Template/Layout/examples).

## Configurations

Update logo URL
```php
Configure::write(['Admin.panel.url' => '/admin']);
```

## Datepicker

The theme comes with [datepicker JS library](https://eonasdan.github.io/bootstrap-datetimepicker/) which is wrapped in
an element. You can use it as follows:

```php
<?= $this->element('QoboAdminPanel.datepicker', ['options' => ['fieldName' => 'foobar']]); ?>
```
All options are:
- fieldName
    - description: name of the field
    - default value: ``` null ```
- icon
    - description: glyphicon name
    - default: calendar
- type
    - description: timepicker, datepicker, and datetimepicker.
    - default: datepicker

## ToDos

1. Add test cases
2. Move assets files to package manager

## License

GPLv2
