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
All options are:
- fieldName
    - description: name of the field
    - default value: ```php null ```
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