Yii CLNDR js
============
Yii2 CLNDR js Extension
The package bundle of [CLNDR.js](https://github.com/kylestetz/CLNDR) plugin.
CLNDR is a jQuery calendar plugin. It was created -- you've heard this before -- out of frustration with the lack of truly dynamic front-end calendar plugins out there.

See a demo: [kylestetz.github.io/CLNDR/](http://kylestetz.github.io/CLNDR/)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require  mhunesi/yii2-clndrjs "*"
```

or add

```
"mhunesi/yii2-clndrjs": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \mhunesi\clndrjs\ClndrJsWidget::widget([
    'clientOptions' => [
        'events' => [
            [
                'date' => '2020-07-27',
                'title' => 'Meeting Title',
                'location' => 'Meeting Location'
            ],
            [
                'date' => '2020-07-29',
                'title' => 'Meeting Title',
                'location' => 'Meeting Location'
            ],
        ]
    ]
]) ?> 
```

Screenshots
-----

![screen-1](https://media.giphy.com/media/ZbfLZYAdUJoo0gj2tI/giphy.gif)