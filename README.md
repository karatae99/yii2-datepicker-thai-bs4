Bootstrap4 DatePicker (Thai) Widget for Yii2
====================================

[![Latest Version](https://img.shields.io/github/tag/karatae99/yii2-datepicker-thai-bs4.svg?style=flat-square&label=release)](https://packagist.org/packages/karatae99/yii2-datepicker-thai-bs4)
[![License](https://poser.pugx.org/karatae99/yii2-datepicker-thai-bs4/license)](https://packagist.org/packages/karatae99/yii2-datepicker-thai-bs4)
[![Total Downloads](https://poser.pugx.org/karatae99/yii2-datepicker-thai-bs4/downloads)](https://packagist.org/packages/karatae99/yii2-datepicker-thai-bs4)

This is Bootstrap4 thai Buddhist-Era (B.E.) datepicker for Yii2 extension. 


Credits
-------
2amigOS! Consulting Group for inspiration by [Bootstrap DatePicker Widget for Yii2](https://github.com/2amigos/yii2-date-picker-widget) and code examples.

Kartik Visweswaran for [Bootstrap 4.x styling](https://github.com/kartik-v/yii2-widget-datepicker).


Installation
------------
The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ composer require karatae99/yii2-datepicker-thai-bs4 "~1.0"
```
or add

```json
"karatae99/yii2-datepicker-thai-bs4" : "~1.0"
```

to the require section of your application's `composer.json` file.


Configuration
------------
To set this up, add this section of code to your application params configuration file (e.g. common/config/params.php):

```php
return [
    ...
    'bsVersion' => '4.x',
];
```

Icons for Bootstrap
------------
Bootstrap 4.x does not include glyphicons or any other icons framework bundled with the library.
To include font awesome assets on your page, include the following markup on the HEAD section of your view layout file, when bsVersion is set to 4.x.
(e.g. frontend/views/layouts/main.php):

```html
<head>
...
<!-- on your view layout file HEAD section -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
</head>
```

Usage
-----

**DatePicker**

This widget renders a Bootstrap DatePicker input control. Best suitable for model with date string attribute.

***Example of use with a form***  
There are two ways of using it, with an `ActiveForm` instance or as a widget setting up its `model` and `attribute`.

```php
<?php
use karatae99\datepicker\DatePicker;
?>

// with an ActiveForm instance 
<?= $form->field($model, 'yourdate', [])->widget(DatePicker::ClassName(),
    [           
            'options' => ['placeholder' => 'เลือกวันที่ '],
            'template' => '{addon}{input}',    
            'language' => 'th',             //<-- Thai B.E.			
            'clientOptions' => [                    
                'format' => 'dd/mm/yyyy',   //<-- Thai B.E.
                'maxViewMode' => 'year',    //“month”, “year”, “decade”, “century” and “millenium”
                'autoclose' => true,
                'todayHighlight' => true,
                'todayBtn' => "linked",
                'clearBtn'  => true,                                                                                                                                         
            ]
    ]);?> 

```  

**DateRangePicker**  

This widget renders a Bootstrap4 DateRangePicker Input control. 

***Example of use with a form***  
The following example works with a model that has two attributes named `date_from` and `date_to`.

```php
<?php
use karatae99\datepicker\DateRangePicker;
?>

// with an ActiveForm instance
<?= $form->field($model, 'date_from')->widget(DateRangePicker::className(), 
    [
            'attribute' => 'date_from',
            'attributeTo' => 'date_to', 
            'options' => ['placeholder' => 'Start date'],
            'optionsTo' => ['placeholder' => 'End date'],      
            'language' => 'th',			//<-- Thai B.E.
            'size' => 'md', //sm. md. lg.
            'clientOptions' => [
                    'format' => 'dd/mm/yyyy',	//<-- Thai B.E.
                    'maxViewMode' => 'decade',	//“month”, “year”, “decade”, “century” and “millenium”
                    'autoclose' => true,			
                    'todayHighlight' => true,
                    'todayBtn' => "linked",
                    'clearBtn'  => true,
            ]
    ]);?>


```  


Further Information
-------------------
Please, check the [Bootstrap DatePicker site](http://bootstrap-datepicker.readthedocs.io) documentation for further information about its configuration options. 


License
-------
The BSD License (BSD). Please see [License File](LICENSE.md) for more information.
