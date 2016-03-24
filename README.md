# QoboAdminPanel plugin for CakePHP

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
In the AppView add:
```php
public $layout = 'QoboAdminPanel.basic';
```

## Examples

Examples can be found under the Layout folder.

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
Others options are:
- fieldName - name of the field - Mandatory
- groupAddon - glyphicon name
- type - possible types: timepicker, datepicker, and datetimepicker.

## ToDos

1. Add test cases
2. Move assets files to package manager

## License

GPLv2