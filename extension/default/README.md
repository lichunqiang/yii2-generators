<?= $generator->title ?>

<?= str_repeat('=', mb_strlen($generator->title, \Yii::$app->charset)) ?>

[![version](https://img.shields.io/packagist/v/<?= $generator->authorName ?>/<?= $generator->packageName ?>.svg?style=flat-square)](https://packagist.org/packages/<?= $generator->authorName ?>/<?= $generator->packageName ?>)
[![Download](https://img.shields.io/packagist/dd/<?= $generator->authorName ?>/<?= $generator->packageName ?>.svg?style=flat-square)](https://packagist.org/packages/<?= $generator->authorName ?>/<?= $generator->packageName ?>)
[![Issues](https://img.shields.io/github/issues/lichunqiang/<?= $generator->packageName ?>.svg?style=flat-square)](https://github.com/lichunqiang/<?= $generator->packageName ?>/issues)

<?= $generator->description ?>


Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist <?= $generator->vendorName ?>/<?= $generator->packageName ?> "*"
```

or add

```
"<?= $generator->vendorName ?>/<?= $generator->packageName ?>": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= "<?= \\{$generator->namespace}AutoloadExample::widget(); ?>" ?>

```

License
-------
![MIT](https://img.shields.io/badge/license-MIT-blue.svg?style=flat-square)
