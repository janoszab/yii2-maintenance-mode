Yii2-maintenance
================

Installation
------------

Add to the require section of your `composer.json` file:
```
"sacara/yii2-maintenance": "*"
```

Add to your config file:
```php
   'bootstrap' => ['log', 'maintenance'],
   ...
   'modules' => [
     'maintenance' => [
        'class' => 'sacara\maintenance\Module',
     ],
   ],
```

Create a file in the `@web` directory named `maintenance` to activate the maintenance mode.