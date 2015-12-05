yii2-generators
--------------

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist light/yii2-generators "*"
```

or add

```
"light/yii2-generators": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
$config['modules']['gii'] = [
    'class' => 'yii\gii\Module',
    'generators' => [
        'extension' => [
            'class' => 'light\generators\extension\Generator'
        ],
        'form' => [
            'class' => 'light\generators\form\Generator'
        ],
        'model' => [
            'class' => 'yii\gii\generators\model\Generator',
            'templates' => [
                'common' => '@vendor/light/yii2-generators/model/default'
            ]
        ],
        'crud' => [
            'class' => 'light\generators\crud\Generator'
        ]
    ]
];
```

License
-------
![MIT](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)
