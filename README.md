yii2-maintenance
================

Installation
------------

```
php composer.phar require --prefer-dist sacara/yii2-maintenance "*"
```

or add

```
"sacara/yii2-maintenance": "*"
```

to the require section of your `composer.json` file.

Add to your config file:
```php
   'bootstrap' => ['log', 'maintenance'],
   ...
   'modules' => [
     'maintenance' => [
        'class' => 'sacara\maintenance\Module',
     ],
   ],
   ...
```

Create a file in the `@web` directory named `maintenance` to activate the maintenance mode.